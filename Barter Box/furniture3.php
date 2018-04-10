<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barter-Box</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	 <link href="css/business.css" rel="stylesheet">

   
<style>
a{
    color: black;
}
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
	color:orange;
    text-decoration: none;
}

a:active {
    text-decoration: none;
}

.search_categories{
  font-size: 13px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
 
}

.search_categories .select{
  width: 120%;
  background:url('arrow.png') no-repeat;
  background-position:80% center;
}

.search_categories .select select{
  background: transparent;
  line-height: 2;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 80%;
  position: relative;
  z-index: 10;
  font-size: 1.25em;
}
</style>
</head>

<body >
<script>
document.getElementById("searchForm").submit();

</script>
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
}
$sqlselect = "SELECT * FROM fashion_details";
$result = mysqli_query($conn, $sqlselect);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$prodName=$row["prod_name"];
		$pic=$row["picture"];
    }
} else {
    echo "0 results";
}*/
$sqlselectdefault= "SELECT * FROM fashion_details";
$resultdefault = mysqli_query($conn, $sqlselectdefault);

if (mysqli_num_rows($resultdefault) > 0) {
    // output data of each row
	$rowdefault=array();
    while($rowProdsdefault = mysqli_fetch_row($resultdefault)) {
		$rowdefault[]=$rowProdsdefault;
    }
} else {
    echo "";
}


$sqlselectpricelth= "SELECT * FROM fashion_details ORDER BY price";
$resultpricelth = mysqli_query($conn, $sqlselectpricelth);

if (mysqli_num_rows($resultpricelth) > 0) {
    // output data of each row
	$rowpricelth=array();
    while($rowProdspricelth = mysqli_fetch_row($resultpricelth)) {
		$rowpricelth[]=$rowProdspricelth;
    }
} else {
    echo "";
}
 
$sqlselectpricehtl= "SELECT * FROM fashion_details ORDER BY price desc";
$resultpricehtl = mysqli_query($conn, $sqlselectpricehtl);

if (mysqli_num_rows($resultpricehtl) > 0) {
    // output data of each row
	$rowpricehtl=array();
    while($rowProdspricehtl = mysqli_fetch_row($resultpricehtl)) {
		$rowpricehtl[]=$rowProdspricehtl;
    }
} else {
    echo "";
}

$sqlselectarrivals= "SELECT * FROM fashion_details ORDER BY purchase_date desc";
$resultarrivals = mysqli_query($conn, $sqlselectarrivals);

if (mysqli_num_rows($resultarrivals) > 0) {
    // output data of each row
	$rowarrivals=array();
    while($rowProdsarrivals = mysqli_fetch_row($resultarrivals)) {
		$rowarrivals[]=$rowProdsarrivals;
    }
} else {
    echo "";
}

$sqlselectjackets= "SELECT * FROM fashion_details WHERE sub_category = 'Jackets'";
$resultjackets = mysqli_query($conn, $sqlselectjackets);

if (mysqli_num_rows($resultjackets) > 0) {
    // output data of each row
	$rowjackets=array();
    while($rowProdsjackets = mysqli_fetch_row($resultjackets)) {
		$rowjackets[]=$rowProdsjackets;
    }
} else {
    echo "";
}

$sqlselecttops= "SELECT * FROM fashion_details WHERE sub_category = 'Tops'";
$resulttops = mysqli_query($conn, $sqlselecttops);

if (mysqli_num_rows($resulttops) > 0) {
    // output data of each row
	$rowtops=array();
    while($rowProdstops = mysqli_fetch_row($resulttops)) {
		$rowtops[]=$rowProdstops;
    }
} else {
    echo "";
}

$sqlselectjeans= "SELECT * FROM fashion_details WHERE sub_category = 'Jeans'";
$resultjeans = mysqli_query($conn, $sqlselectjeans);

if (mysqli_num_rows($resultjeans) > 0) {
    // output data of each row
	$rowjeans=array();
    while($rowProdsjeans = mysqli_fetch_row($resultjeans)) {
		$rowjeans[]=$rowProdsjeans;
    }
} else {
    echo "";
}

$sqlselectshoes= "SELECT * FROM fashion_details WHERE sub_category = 'Shoes'";
$resultshoes = mysqli_query($conn, $sqlselectshoes);

if (mysqli_num_rows($resultshoes) > 0) {
    // output data of each row
	$rowshoes=array();
    while($rowProdsshoes = mysqli_fetch_row($resultshoes)) {
		$rowshoes[]=$rowProdsshoes;
    }
} else {
    echo "";
}

$sqlselectbags= "SELECT * FROM fashion_details WHERE sub_category = 'Bags'";
$resultbags = mysqli_query($conn, $sqlselectbags);

if (mysqli_num_rows($resultbags) > 0) {
    // output data of each row
	$rowbags=array();
    while($rowProdsbags = mysqli_fetch_row($resultbags)) {
		$rowbags[]=$rowProdsbags;
    }
} else {
    echo "";
}

$sqlselectaccessories= "SELECT * FROM fashion_details WHERE sub_category = 'Accessories'";
$resultaccessories = mysqli_query($conn, $sqlselectaccessories);

if (mysqli_num_rows($resultaccessories) > 0) {
    // output data of each row
	$rowaccessories=array();
    while($rowProdsaccessories = mysqli_fetch_row($resultaccessories)) {
		$rowaccessories[]=$rowProdsaccessories;
    }
} else {
    echo "";
}

$sqlselectothers= "SELECT * FROM fashion_details WHERE sub_category = 'Others'";
$resultothers = mysqli_query($conn, $sqlselectothers);

if (mysqli_num_rows($resultothers) > 0) {
    // output data of each row
	$rowothers=array();
    while($rowProdsothers = mysqli_fetch_row($resultothers)) {
		$rowothers[]=$rowProdsothers;
    }
} else {
    echo "";
}

$sqlselectlessthan10= "SELECT * FROM fashion_details WHERE price BETWEEN 0 and 10";
$resultlessthan10 = mysqli_query($conn, $sqlselectlessthan10);

if (mysqli_num_rows($resultlessthan10) > 0) {
    // output data of each row
	$rowlessthan10=array();
    while($rowProdslessthan10 = mysqli_fetch_row($resultlessthan10)) {
		$rowlessthan10[]=$rowProdslessthan10;
    }
} else {
    echo "";
}

$sqlselect11and50= "SELECT * FROM fashion_details WHERE price BETWEEN 11 and 50";
$result11and50 = mysqli_query($conn, $sqlselect11and50);

if (mysqli_num_rows($result11and50) > 0) {
    // output data of each row
	$row11and50=array();
    while($rowProds11and50 = mysqli_fetch_row($result11and50)) {
		$row11and50[]=$rowProds11and50;
    }
} else {
    echo "";
}
 
 
$sqlselect51and100= "SELECT * FROM fashion_details WHERE price BETWEEN 51 and 100";
$result51and100 = mysqli_query($conn, $sqlselect51and100);

if (mysqli_num_rows($result51and100) > 0) {
    // output data of each row
	$row51and100=array();
    while($rowProds51and100 = mysqli_fetch_row($result51and100)) {
		$row51and100[]=$rowProds51and100;
    }
} else {
    echo "";
}
 
$sqlselect101and500= "SELECT * FROM fashion_details WHERE price BETWEEN 101 and 500";
$result101and500 = mysqli_query($conn, $sqlselect101and500);

if (mysqli_num_rows($result101and500) > 0) {
    // output data of each row
	$row101and500=array();
    while($rowProds101and500 = mysqli_fetch_row($result101and500)) {
		$row101and500[]=$rowProds101and500;
    }
} else {
    echo "";
} 

$sqlselectgreaterthan500= "SELECT * FROM fashion_details WHERE price > 500";
$resultgreaterthan500 = mysqli_query($conn, $sqlselectgreaterthan500);

if (mysqli_num_rows($resultgreaterthan500) > 0) {
    // output data of each row
	$rowgreaterthan500=array();
    while($rowProdsgreaterthan500 = mysqli_fetch_row($resultgreaterthan500)) {
		$rowgreaterthan500[]=$rowProdsgreaterthan500;
    }
} else {
    echo "";
} 

$sqlselectsizeXS= "SELECT * FROM fashion_details WHERE size = 'XS'";
$resultsizeXS = mysqli_query($conn, $sqlselectsizeXS);

if (mysqli_num_rows($resultsizeXS) > 0) {
    // output data of each row
	$rowsizeXS=array();
    while($rowProdssizeXS = mysqli_fetch_row($resultsizeXS)) {
		$rowsizeXS[]=$rowProdssizeXS;
    }
} else {
    echo "";
} 

$sqlselectsizeS= "SELECT * FROM fashion_details WHERE size = 'S'";
$resultsizeS = mysqli_query($conn, $sqlselectsizeS);

if (mysqli_num_rows($resultsizeS) > 0) {
    // output data of each row
	$rowsizeS=array();
    while($rowProdssizeS = mysqli_fetch_row($resultsizeS)) {
		$rowsizeS[]=$rowProdssizeS;
    }
} else {
    echo "";
} 

$sqlselectsizeM= "SELECT * FROM fashion_details WHERE size = 'M'";
$resultsizeM = mysqli_query($conn, $sqlselectsizeM);

if (mysqli_num_rows($resultsizeM) > 0) {
    // output data of each row
	$rowsizeM=array();
    while($rowProdssizeM = mysqli_fetch_row($resultsizeM)) {
		$rowsizeM[]=$rowProdssizeM;
    }
} else {
    echo "";
} 

$sqlselectsizeL= "SELECT * FROM fashion_details WHERE size = 'L'";
$resultsizeL = mysqli_query($conn, $sqlselectsizeL);

if (mysqli_num_rows($resultsizeL) > 0) {
    // output data of each row
	$rowsizeL=array();
    while($rowProdssizeL = mysqli_fetch_row($resultsizeL)) {
		$rowsizeL[]=$rowProdssizeL;
    }
} else {
    echo "";
} 

$sqlselectsizeXL= "SELECT * FROM fashion_details WHERE size = 'XL'";
$resultsizeXL = mysqli_query($conn, $sqlselectsizeXL);

if (mysqli_num_rows($resultsizeXL) > 0) {
    // output data of each row
	$rowsizeXL=array();
    while($rowProdssizeXL = mysqli_fetch_row($resultsizeXL)) {
		$rowsizeXL[]=$rowProdssizeXL;
    }
} else {
    echo "";
} 

$sqlselectblue= "SELECT * FROM fashion_details WHERE color = 'Blue'";
$resultblue = mysqli_query($conn, $sqlselectblue);

if (mysqli_num_rows($resultblue) > 0) {
    // output data of each row
	$rowblue=array();
    while($rowProdsblue = mysqli_fetch_row($resultblue)) {
		$rowblue[]=$rowProdsblue;
    }
} else {
    echo "";
} 

$sqlselectgreen= "SELECT * FROM fashion_details WHERE color = 'Green'";
$resultgreen = mysqli_query($conn, $sqlselectgreen);

if (mysqli_num_rows($resultgreen) > 0) {
    // output data of each row
	$rowgreen=array();
    while($rowProdsgreen = mysqli_fetch_row($resultgreen)) {
		$rowgreen[]=$rowProdsgreen;
    }
} else {
    echo "";
} 

$sqlselectyellow= "SELECT * FROM fashion_details WHERE color = 'Yellow'";
$resultyellow = mysqli_query($conn, $sqlselectyellow);

if (mysqli_num_rows($resultyellow) > 0) {
    // output data of each row
	$rowyellow=array();
    while($rowProdsyellow = mysqli_fetch_row($resultyellow)) {
		$rowyellow[]=$rowProdsyellow;
    }
} else {
    echo "";
} 

$sqlselectred= "SELECT * FROM fashion_details WHERE color = 'Red'";
$resultred = mysqli_query($conn, $sqlselectred);

if (mysqli_num_rows($resultred) > 0) {
    // output data of each row
	$rowred=array();
    while($rowProdsred = mysqli_fetch_row($resultred)) {
		$rowred[]=$rowProdsred;
    }
} else {
    echo "";
} 
$sqlselectblack= "SELECT * FROM fashion_details WHERE color = 'Black'";
$resultblack = mysqli_query($conn, $sqlselectblack);

if (mysqli_num_rows($resultblack) > 0) {
    // output data of each row
	$rowblack=array();
    while($rowProdsblack = mysqli_fetch_row($resultblack)) {
		$rowblack[]=$rowProdsblack;
    }
} else {
    echo "";
}
$sqlselectwhite= "SELECT * FROM fashion_details WHERE color = 'White'";
$resultwhite = mysqli_query($conn, $sqlselectwhite);

if (mysqli_num_rows($resultwhite) > 0) {
    // output data of each row
	$rowwhite=array();
    while($rowProdswhite = mysqli_fetch_row($resultwhite)) {
		$rowwhite[]=$rowProdswhite;
    }
} else {
    echo "";
} 
$fashion_sort="Select a value";
$fashion_subCategory = "Select a value";
$fashion_priceRange = "Select a value";
$fashion_size = "Select a value";
$fashion_color = "Select a value";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fashion_sort = $_POST["selectSort"];
$fashion_subCategory = $_POST["fashion_subCategory"];
$fashion_priceRange = $_POST["fashion_priceRange"];
$fashion_size = $_POST["fashion_size"];
$fashion_color = $_POST["fashion_color"];

}

}

?> 

<script>
    // Attach a submit handler to the form
    $( "#searchForm" ).submit(function( event ) {

       
            var content = $( data );
            $( "#result" ).empty().append( content );
        });
    });
</script>
	
<script>
	var app=<?php echo "{rowdefault[0][0]}"; ?>
	
	
	var fashionModule = angular.module('fashionModule');
	fashionModule.controller('fashionContoller', function($scope,$rootScope,$location) {
	
	fashionCtrl.function = function (rowdefault) {
		
		$rootScope.product = rowdefault.product;
		$location.path('/fashion');

	};
})

</script>

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
	
	

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('assests/img/furniturec1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/furniturec2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/furniturec3.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<br/>
<div class="row">
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
                </ul>
				</div>
				<div class="row text-center">

				 <ul class="pagination" >
                    
                    <li>
                        <a href="furniture.php">Grid</a>
                    </li>
                    <li>
                        <a href="furniture2.php">List</a>
                    </li>
                    <li>
                        <a href="furniture3.php">Map</a>
                    </li>
                </ul>
            </div>
        </div>
        
</div>
</div>
	
		<hr><br/>
<div class="row">
           <div class="col-md-10 col-md-offset-1">
 
            
			<div id="map" style="width:100%;height:700px"></div>
            
							<script>
							function myMap() {
							var mapOptions = {lat: 42.3459899, lng: -71.0886283};
							var mapOptions1 = {lat: 40.7128, lng: -74.0059};
														var mapOptions2 = {lat: 40.7282, lng: -74.0776};
							var mapOptions3 = {lat: 39.9526, lng: -75.1652};
							var mapOptions4 = {lat: 43.1939, lng: -71.5724};
							var mapOptions5 = {lat: 42.38579, lng: -70.876022};
							var mapOptions6 = {lat: 42.2529, lng: -71.0023};
							var mapOptions7 = {lat: 42.3016, lng: -71.0676};
							var mapOptions8 = {lat: 42.3765, lng: -71.2356};


							var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions
							});
							var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions1
							});
							var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions2
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions3
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions4
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions5
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions6
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions7
							});var map = new google.maps.Map(document.getElementById('map'),{
							zoom: 7,
							center:mapOptions8
							});


							var marker = new google.maps.Marker({
							position: mapOptions,
							map: map
							});
							
							var marker1 = new google.maps.Marker({
							position: mapOptions1,
							map: map
							});
							var marker2 = new google.maps.Marker({
							position: mapOptions2,
							map: map
							});var marker3 = new google.maps.Marker({
							position: mapOptions3,
							map: map
							});var marker4 = new google.maps.Marker({
							position: mapOptions4,
							map: map
							});var marker5 = new google.maps.Marker({
							position: mapOptions5,
							map: map
							});var marker6 = new google.maps.Marker({
							position: mapOptions6,
							map: map
							});var marker7 = new google.maps.Marker({
							position: mapOptions7,
							map: map
							});var marker8 = new google.maps.Marker({
							position: mapOptions8,
							map: map
							});

							}
							</script>

							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCiqK9pfNuFgYj8mOb6AvTYwHkJX1-6CY&callback=myMap"></script>                            
                        
  
</div>
 </div>
     <br/>
<hr>
<br/>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	
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
