
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barter Box Product Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdesignproject";

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

$sqlselectProds= "SELECT * FROM fashion_details";
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
<div class="col-sm-12">
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span> 
      			</button>
      			<a class="navbar-brand" href="index.html">Barter-Box</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    				<ul class="nav navbar-nav navbar-right">
      					<li><a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    				</ul>
    			<form class="navbar-form navbar-left">
      				<div class="form-group has-feedback">
      					<i class="form-control-feedback glyphicon glyphicon-search"></i>
      					<input type="search" class="form-control" placeholder="Search">
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
          			<form role="form">
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
        		<div class="modal-footer">
          			<p>New User: <a href="#registerModal" data-toggle="modal">Register here!</a></p>
        		</div>
  			</div>
  		</div>
	</div>
	<div id="registerModal" class="modal slide" role="dialog">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">×</button>
          			<h3>Register</h3>
        		</div>
        		<div class="modal-body">
          			<form role="form">
          				<div class="form-group">
              				<label for="name">Name</label>
              				<input type="text" class="form-control" id="name" placeholder="Enter Name">
            			</div>
            			<div class="form-group">
              				<label for="username">Email ID</label>
              				<input type="email" class="form-control" id="username" placeholder="Enter Email ID">
            			</div>
            			<div class="form-group">
				            <label for="pwd">Password</label>
				            <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
            			</div>
            			<div class="form-group">
				            <label for="pwd">Confirm Password</label>
				            <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
            			</div>
              			<button type="submit" class="btn btn-block btn-success">Create Account</button>
          			</form>
        		</div>
       		</div>
  		</div>
	</div>
</div>

<div style="width:100%; height:65px;"></div>

 <div class="col-sm-8">
<div class="well">
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
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
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
    
		<div class="panel panel-default" style="height:230px">
                <div class="panel-body">
					<h3></h3>
					<h3>$500</h3>
					<h4>Location</h4>
					<h4>Date posted</h4>
	
		</div>
		</div>
		
		<div class="panel panel-default" style="height:153px">
                <div class="panel-body">
					<h3 style="text-align:center">Interested?</h4>
					<input type="button" value="BUY" style="width:100%;height:45px"/>
	
		</div>
		</div>
	
</div> 


</div>
</div>

<div style="width:100%; height:15px;"></div>

<div class="panel panel-default">
                <div class="panel-body">
                   <h3>Description</h3>
				   <p>
				   Looking for Entry level Candidates  immediately for the following positions 
1. Software Developer(JAVA). 2. Industrial Engineer. 3. Design Engineer. 4. Business Analyst. 5. Software Quality Analyst. 6. Mechanical/ Electrical Engineers 7. Software Developer. 8. Health Care / Clinical Research. 9. Chemical Engineer. Please don't mention your phone numbers or email ID in comments. Interested candidates can share their resume at ajay@wireclass.us
</p>
                </div>
            </div>
</div>
</div>
						
  <div class="col-sm-4">
    <div class="well">
		 <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:150px;height:150px;" alt="Image">
                            <h3>User's Name</h3>
                        </div>
                        <div class="pull-right collapsed navbar-toggle" data-toggle="collapse" data-target="#profileinfo" aria-expanded="false">
                        	<span class="glyphicon glyphicon-menu-down"></span>
                        </div>
                        <div class="collapse navbar-collapse" id="profileinfo">
                        <div class="media-body">
                            <hr>
                            <h4><strong>About</strong></h4>
                            <p>Information System's Student at Northeastern University.</p>
                            
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
	<!--
	<div class="well" style="height:265px;">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                   

                </div>
				-->

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
      <img src="<?php echo "{$row[0][3]}"?>" class="img-responsive" style="width:100%" alt="Image">
      <p><?php echo "{$row[0][1]}"?></p>
    </div>
    <div class="col-sm-2"> 
      <img src="<?php echo "{$row[1][3]}"?>" class="img-responsive" style="width:100%" alt="Image">
      <p><?php echo "{$row[1][1]}"?></p>    
    </div>
    <div class="col-sm-2"> 
      <img src="<?php echo "{$row[2][3]}"?>" class="img-responsive" style="width:100%" alt="Image">
      <p><?php echo "{$row[2][1]}"?></p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Product 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Product 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Product 6</p>
    </div> 
  </div>
</div>
</div>
</div>
<br>



</body>
</html>
