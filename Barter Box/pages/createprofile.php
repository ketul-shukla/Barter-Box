<?php

if (isset($_POST['submitProfile'])) {
	$conn = new mysqli('localhost', 'root', 'ankit', 'barterbox');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	$stmt = $conn->prepare("INSERT INTO profile (firstName, lastName, emailID, password, about, location, userName) VALUES (?, ?, ?, ?, ?,?,?)");
	$stmt->bind_param('sssssss', $firstName, $lastName, $emailID, $password, $about, $location, $userName);
	$firstName= $_POST['firstName'];
	$lastName=$_POST['lastName'];
	$emailID= $_POST['emailID'];
	$password=$_POST['password'];
	$location=$_POST['location'];
	$about=$_POST['about'];
	$userName=$_POST['userName'];
	$stmt->execute();

$stmt->close();
$conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>

	<title>Barter Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <link rel="stylesheet" href="assests/css/profile.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top nav-color">
        <div class="container-fluid">
           <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="index.html"><img class="logo" src="assests/img/barterboxlogo.png"></a>
           </div>
           <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav navbar-right">
                         <li class="hover-post"><a href="/#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"> </span>  Login</a></li>
                   </ul>
             </div>
        </div>
    </nav>
	<div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h3>Log In</h3>
               </div>
               <div class="modal-body">
                     <form role="form" name="loginform" id="loginform" action="">
                       <div class="form-group">
                             <label for="username">Email ID</label>
                             <input type="email" class="form-control" id="username" placeholder="Enter Email ID">
                       </div>
                       <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
                       </div>
                         <button type="submit" class="btn btn-block btn-success">Submit</button>
                     </form>
               </div>
             </div>
         </div>
    </div>

	<div class="profilebody">
	
    <div class="row">
       <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
            <form class="form-horizontal" id="createProfileForm" action="index.php" method="post">
            
			<div class="panel panel-default">
			<div class="panel-heading"><div class="panel-title"><h2 class="panel-head">Profile Picture</h2></div>
                    </div>
                <div class="panel-body">
                   
                    
                        <div class="uploadimage col-lg-12 col-md-12" id="image_preview">
                            <img class="img-thumbnail img-responsive" id="imagedisplaytag"  width="300px" height="300px">
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
						<center>
						 <label class="btn btn-default" style="margin:auto !important;">Upload
						 <input style="margin:auto; display:none;" type="file" name="fileUpload" id="fileUpload" onchange="previewFile()" class=" imageuploadefile form-control-file" value="Upload Photo">
						 </label>
						 </center>
						 </div>
                    
                </div>
            </div>
			
			<div class="panel panel-default">
			<div class="panel-heading"><div class="panel-title"><h2>Personal Information</h2></div>
                    </div>
                <div class="panel-body">
                    
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
						</span>
						<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
                        </div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
						</span>
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
						</div>
						<span class="errormessage"></span>
                        <br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
						</span>
						<input type="text" name="userName" class="form-control" id="userName" placeholder="User Name">
						</div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-envelope"></i>
						</span>
                        <input type="email" name="emailID" class="form-control" id="emailID" placeholder="Email Address">
                        </div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-envelope"></i>
						</span>
                        <input type="email" name="verifyemailID" class="form-control" id="verifyemailID" placeholder="Re-enter Email Address">
                        </div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
						</span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password">
                        </div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
						</span>
                        <input type="password" name="verifypassword" class="form-control" id="verifypassword" placeholder="Renter password">
						</div>
						<span class="errormessage"></span>
						<br>
                </div>
            </div>
            
            <div class="panel panel-default">
			<div class="panel-heading"><div class="panel-title"><h2>Additional Information</h2></div>
                    </div>
                <div class="panel-body">
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-pencil"></i>
						</span>
                        <textarea class="form-control" name="about" id="aboutYourself" placeholder="Say me Something About Yorurself"></textarea>
                        </div>
						<span class="errormessage"></span>
						<br>
						<div class="input-group">
						<span class="input-group-addon">
                        <i class="glyphicon glyphicon-map-marker"></i>
						</span>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Your Location">
						</div>
						<span class="errormessage"></span>
                        <br>
                        <div class="uploadbutton col-lg-12 col-md-12">
                            <button class="btn btn-primary" name="submitProfile" ><i class="fa fa-upload" aria-hidden="true"></i> Create Profile</button>
                        </div>
                </div>
            </div>
            <hr>
            
            </form>
        </div>
    </div>
    </div>
	<script>
   function previewFile(){
       var preview = document.querySelector('#imagedisplaytag'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "assests/img/profile/profilemaledefault.png";
       }
  }

  previewFile();  //calls the function named previewFile()
  

	 
  </script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="js/validate.js"></script>
</body>
</html>