<?php
$conn = mysqli_connect('localhost:3306', 'root', 'ankit', 'barterbox');
if($conn){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
     $emailID = mysqli_real_escape_string($conn,$_POST['emailID']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM user_details WHERE emailID = '$emailID' and password = '$password'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     $count = mysqli_num_rows($result);
     if($count == 1) {
         echo "<style>
                     #login-hide{
                     visibility: hidden;
                     }
                   </style>";
               }
         else {
        echo "wrong";
     }
}
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
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  <script type="text/javascript src="js/loginValidation.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/post.css">
</head>
<body id="top" ng-app="myApp" class="background-color">
	<nav class="navbar navbar-inverse navbar-fixed-top nav-color">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span> 
      			</button>
      			<a class="navbar-brand" href="index.php#/"><img class="logo" src="assests/img/barterboxlogo.png"></a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    				<ul class="nav navbar-nav navbar-right">
    					<li class="hover-post"><a href="#post"><span class="glyphicon glyphicon-camera"></span>Post</a></li>
      					<li class="hover-post"><a href="/#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    				</ul>
    			<form class="navbar-form navbar-left">
      				<div class="form-group has-feedback">
      					<i class="form-control-feedback glyphicon glyphicon-search"></i>
      					<input type="search" ng-model="search" class="form-control" placeholder="Search">
      				</div>
      				<button type="submit" class="btn btn-primary">Submit</button>
    			</form>
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
          			<form role="form" name="loginForm" id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            			<div class="form-group">
              				<label for="username">Email ID</label>
              				<input type="email" class="form-control" name="emailID" id="emailID" placeholder="Enter Email ID">
            			</div>
            			<div class="form-group">
				            <label for="pwd">Password</label>
				            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            			</div>
              			<button type="submit" name="loginUser" class="btn btn-block btn-success">Submit</button>
          			</form>
        		</div>
        		<div class="modal-footer">
        		<span id="model-error"></span>	


          			<p>New User: <a href="createprofile.php" >Register here!</a></p>
        		</div>
  			</div>
  		</div>
	</div>


	<!-- <div id="registerModal" class="modal slide" role="dialog">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">×</button>
          			<h3>Register</h3>
        		</div>
        		<div class="modal-body">
          			<form role="form" action="registerUser.php" method="post">
          				<div class="form-group">
              				<label for="name">Name</label>
              				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            			</div>
            			<div class="form-group">
              				<label for="username">Email ID</label>
              				<input type="email" class="form-control" id="emailID" name="emailID" placeholder="Enter Email ID">
            			</div>
            			<div class="form-group">
				            <label for="pwd">Password</label>
				            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            			</div>
            			<div class="form-group">
				            <label for="pwd">Confirm Password</label>
				            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter Password">
            			</div>
              			<button type="submit" name="registerData" class="btn btn-block btn-success">Create Account</button>
          			</form>
        		</div>
       		</div>
  		</div>
	</div>-->
	<div class="container adjust-sidecontainer">
		<ul class="nav nav-tabs nav-stacked">
		  <li class="hover-sidemenu"><a href="#/" class="list-group-item"><span class="glyphicon glyphicon-home"></span>Home</a></li>
		  <li class="hover-sidemenu"><a href="fashion.php" class="list-group-item"><span class="glyphicon glyphicon-book"></span>Fashion</a></li>
		  <li class="hover-sidemenu"><a href="books.php" class="list-group-item"><span class="glyphicon glyphicon-bed"></span>Books</a></li>
		  <li class="hover-sidemenu"><a href="electronics.php" class="list-group-item"><span class="glyphicon glyphicon-sunglasses"></span>Electronics</a></li>
		  <li class="hover-sidemenu"><a href="furniture.php" class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span>Furniture</a></li>
		</ul>
	</div>
	<div ng-view></div>
		
		<!-- <div style="width: 100%; height: 10px;"></div>
		<div class="col-md-12 adjust">
			<div class="btn-group">
				<button type="button" class="btn btn-default">Trending</button>
  				<button type="button" class="btn btn-default">New</button>
 				<button type="button" class="btn btn-default">Old</button>
			</div>
			<ul class="pagination float-right">
		        <li class="disabled"><a href="#"><<</a></li>
		        <li><a href="#">1</a></li>
		        <li><a href="#">2</a></li>
		        <li><a href="#">3</a></li>
		        <li><a href="#">4</a></li>
		        <li><a href="#">5</a></li>
		        <li><a href="#">>></a></li>
      		</ul>
		</div> -->
	<div class="container col-md-12">
		<footer class="footer-style">
			<div class="footer-left">
				<span><img class="logo-footer" src="assests/img/barterboxlogo.png"></span>
				<p class="footer-links">
					<a href="#">Home</a>
					<a href="#">Contact</a>
					<a href="#">Faq</a> 
				</p>
				<p class="footer-copyrights">Copyrights &copy; 2017 Barter-Box</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>306 Huntington Avenue</span> Boston, Massachusettes</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 111-111-1111</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:barterbox@gmail.com">barterbox@gmail.com</a></p>
				</div>
			</div> 
			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					A self started project for web design subject at Northeastern univerity
				</p>
				<div class="footer-icons">
					<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
					<a href="http://www.github.com"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>
	</div> 
	<label class="back-to-top" data-toggle="tooltip" title="Back to Top"><span class="glyphicon glyphicon-menu-up"></span></label>
	<script type="text/javascript">
		var app = angular.module("myApp", ["ngRoute"]);
		app.config(function($routeProvider) {
	    	$routeProvider
	    	.when("/", {
	        	templateUrl : "home.htm"
	    	})
	    	.when("/all", {
	        	templateUrl : "all.htm"
	    	})
	    	.when("/books", {
	        	templateUrl : "books.htm"
	    	})
	    	.when("/furniture", {
	        	templateUrl : "furniture.htm"
	    	})
	    	.when("/fashion",{
	    		templateUrl : "fashion.htm"
	    	})
	    	.when("/others",{
	    		templateUrl : "others.htm"
	    	})
	    	.when("/post",{
	    		templateUrl : "post.htm"
	    	});
		});

		$(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        $('.back-to-top').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });

	</script>
</body>
</html>