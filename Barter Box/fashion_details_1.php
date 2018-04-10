
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barter Box Product Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/business.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
	
	body {
		background-color: #fff7f8;
     }
	 
	 #background {
		background-color: white;
     }
	 
	 #div1:hover {background-color: #F8F8F8;}
	 #div2:hover {background-color: #F8F8F8;}
	 #div3:hover {background-color: #F8F8F8;}
	 #div4:hover {background-color: #F8F8F8;}
	 #div5:hover {background-color: #F8F8F8;}
	 #div6:hover {background-color: #F8F8F8;}
	 #div7:hover {background-color: #F8F8F8;}
	 #div8:hover {background-color: #F8F8F8;}
	 #div9:hover {background-color: #F8F8F8;}
	 #div10:hover {background-color: #F8F8F8;}
	 
  </style>
</head>
<body style= "color:fff7f8" >
<?php
$servername = "localhost";
$username = "root";
$password = "ankit";
$dbname = "barterbox";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
   

/*ql = "insert into product_details (prod_name,prod_description,picture,category,sub_category,price,prod_condition)
values ('Jacket','Excellet leather','abc.png','Fashion','Jackets',40,'New')";
$query=mysqli_query($conn,$sql);
if ($query) {
    echo "New record created successfully";
}*/

$sqlselectProds= "SELECT * FROM fashion_details WHERE sub_category = 'Jeans'";
$resultProds = mysqli_query($conn, $sqlselectProds);

if (mysqli_num_rows($resultProds) > 0) {
    // output data of each row
	$row=array();
    while($rowProds = mysqli_fetch_row($resultProds)) {
		$row[]=$rowProds;
    }
} else {
    echo "";
}
} 
else {
    echo "";

}

?>

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
          			<form role="form" name="loginForm" id="loginForm" action="registerUser.php" method="post">
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

<div class="col-lg-12">
<div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                     
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="electronics.php">Electronics</a>
                    </li>
                    <li>
                        <a href="fashion.php">Fashion</a>
                    </li>
                    <li>
                        <a href="books.php">Books</a>
                    </li>
					<li>
                        <a href="furniture.php">Furniture</a>
                    </li>
                </ul>
				</div>
</div>
</div>
<div style="width:100%; height:65px;"></div>

 <div class="col-sm-8">
<!--div class="well"-->
<div class="container">
<div class="row">
  <div class="col-sm-5" style="margin-right:px;margin-left:px">
    <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="height: 400px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo "{$row[0][3]}"?>" alt="Image" style="height:400px;">
                
        </div>

        <div class="item">
          <img src="<?php echo "{$row[0][3]}"?>" alt="Image" style="height:400px;">
               
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	
	
  </div>
  
  
  
  <div class="col-sm-3">
    
		<div id="div1" class="panel panel-default" style="height:230px">
                <div class="panel-body">
					<span class="star glyphicon glyphicon-star-empty"></span> <i class="heart fa fa-heart-o" style="height:200px"></i>
					<h3><?php echo "{$row[0][1]}"?> </h3> 
					<h3>$<?php echo "{$row[0][5]}"?></h3><br/>
					<h4>Condition: <?php echo "{$row[0][6]}"?></h4>
					<h4>Purchased in: <?php echo "{$row[0][7]}"?></h4>
	
		</div>
		</div>
		
		<div id="div2" class="panel panel-default" style="height:153px">
                <div class="panel-body">
					<h3 style="text-align:center">Interested?</h4>
					<!--input type="button" value="BUY" style="width:100%;height:45px"/-->
					
					<!--button onclick="myFunction()" value="BUY" style="width:100%;height:45px">BUY</button-->
					 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width:100%;height:45px">BUY</button>
					
					<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Happy Shopping !!</h4>
        </div>
        <div class="modal-body">
          <p>A notification has been sent to the seller of the product !!</p>
		  <p>Click help for any queries !</p>
        </div>
        <div class="modal-footer">
		  <a href="faq.html"><input type="button" value="Help" /></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  
        </div>
      </div>
      
    </div>
  </div>
	
		</div>
		</div>
	
</div> 


</div>
</div>


<div style="width:100%; height:15px;"></div>

<div class="row">

<div class="col-sm-4">
 
 <div class="panel panel-default"  >
                <div id="div3" class="panel-body">
					<br/>
					<br/>
					<h4>Size: <?php echo "{$row[0][8]}"?></h4>
					<h4>Color: <?php echo "{$row[0][9]}"?></h4>
					<h4>Brand: <?php echo "{$row[0][10]}"?></h4>
					<h4>Fabric: <?php echo "{$row[0][11]}"?></h4>
					
					<br/>
	
		        </div>
		</div>
 
 </div>
 
<div class="col-sm-8">
<div id="div4" class="panel panel-default" >
                <div class="panel-body">
                   <h3>Description</h3>
				   <p>
				   	<?php echo "{$row[0][2]}"?>
				   </p>
                </div>
 </div>
 </div>
 
 
 
 </div>
<!--/div-->
</div>
						
  <div class="col-sm-4">
    
		 <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
      <img src="assests/img/seller_2.jpg" class="img-responsive" style="width:200px;height:150px;" alt="Image">
                            <h3>Monica Geller</h3>
                        </div>
                        <div class="pull-right collapsed navbar-toggle" data-toggle="collapse" data-target="#profileinfo" aria-expanded="false">
                        	<span class="glyphicon glyphicon-menu-down"></span>
                        </div>
                        <div class="collapse navbar-collapse" id="profileinfo">
                        <div class="media-body">
                            <hr>
                            <h4><strong>About</strong></h4>
                            <p>Information System's Student at Northeastern University.</p>
                            <br/>
                            <h4><strong>Location</strong></h4>
							<div id="map" style="width:290px;height:150px"></div>
            
							<script>
							function myMap() {
							var mapOptions = {lat: 42.3459899, lng: -71.0886283};
							var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 13,
							center:mapOptions
							});

							var marker = new google.maps.Marker({
							position: mapOptions,
							map: map
							});

							}
							</script>

							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCiqK9pfNuFgYj8mOb6AvTYwHkJX1-6CY&callback=myMap"></script>                            
                        </div>
                        </div>
						<div  style="width:100%; height:25px;"></div>
						
						<input type="button" value="CHAT WITH USER!" align="center" style="width:100%;height:50px;"/>

                    </div>
                </div>
            
      
    </div>
	

            </div>

        </div>

    </div>
	
	 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    
  </div>

<hr>

<div class="col-sm-12">
<div class="well">
<div class="container text-center">    
  <h3>Recommended Products!</h3>
  <br>
  
  
  <div class="row">
  
 
    <div class="col-sm-2">
	 <div id="div5" class="well" style="background-color:white">
      <img src="<?php echo "{$row[1][3]}"?>" class="img-responsive" style="width:100%;height:100px"  alt="Image">
    </div>
  </div>	
  
  
    <div class="col-sm-2"> 
	<div id="div6" class="well">
      <img src="<?php echo "{$row[2][3]}"?>" class="img-responsive" style="width:100%;height:100px" alt="Image">    
    </div>
  </div>	
  
  
    <div class="col-sm-2"> 
	<div id="div7" class="well">
      <img src="<?php echo "{$row[3][3]}"?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
    </div>
  </div>
  
 
    <div class="col-sm-2"> 
	<div id="div8" class="well">
      <img src="<?php echo "{$row[4][3]}"?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
    </div> 
  </div>	
  
  
    <div class="col-sm-2"> 
	<div id="div9" class="well">
      <img src="<?php echo "{$row[5][3]}"?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
    </div>     
  </div>	
  
  
    <div class="col-sm-2"> 
	<div id="div10" class="well">
      <img src="<?php echo "{$row[6][3]}"?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
    </div>

	
  </div>


</div>
	</div>
</div>
<br>

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
	


</body>
</html>
