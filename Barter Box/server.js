
var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
var mongoose = require('mongoose');

app.use(express.static(__dirname + '/public'));
users = {};
connections = [];
server.listen(process.env.PORT || 3000);
mongoose.connect('mongodb://localhost/chats', function(err){
	if(err){
	console.log(err);
	}
	else{
		console.log('connected mongo');
	}
});
//database schema
var chatSchema = mongoose.Schema({
	nick: String,
	msg: String,
	created: {type: Date, default:Date.now }
});

var Chat = mongoose.model('Message', chatSchema);
console.log("server is running........");
app.get('/', function(req, res){
    res.sendFile(__dirname+ '/chat.html');
});

//connection with socket
io.on('connection', function(socket){
	var query= Chat.find({});
	query.sort('-created').limit(50).exec(function(err, docs){
		if(err) throw err;
		socket.emit('load old messages',docs);
	});
    connections.push(socket);
    console.log('connected:%s socets connected', connections.length);
    socket.on('new user', function(data, callback){
    	if(data in users){
    		callback(false);
    	} else {
    		callback(true);
    		socket.userName = data;
    		users[socket.userName] = socket;
			updateusernames();
			updatewelcomeuser(socket.userName);
    	}
    });


    function updateusernames(){
    	io.emit('usernames',Object.keys(users));

    }
    function updatewelcomeuser(){
    	io.emit('welcomeuser',socket.userName);
    	
    }
	//send message
     socket.on('send message', function(data, callback){
     	var msg = data.trim();
     	if(msg.substr(0,1) ==='@'){
     		msg = msg.substr(1);
     		var indexv = msg.indexOf(' ');
     		if(indexv !== -1){
     			var name = msg.substring(0,indexv);
     			var msg=msg.substring(indexv+1);
     			if (name in users){
     				users[name].emit('private message', {msg: msg,nick: socket.userName});
     				console.log('whisper!');
     			} else {
     				callback('Enter a valid user');
     			}
     			

     		} else {
     			callback('Please Enter your private message');
     		}
     	} else{
     		var newMsg = new Chat({msg: msg, nick: socket.userName});
     		newMsg.save(function(err){
     			if(err) throw err;
     			io.emit('new message', {msg: msg,nick: socket.userName});
     		});
		}
  });

//disconnect
     socket.on('disconnect', function(data){
          	if(!socket.userName) return;
          	delete users[socket.userName];
     	updateusernames();
     });
 });