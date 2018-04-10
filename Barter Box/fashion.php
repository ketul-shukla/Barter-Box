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
                <div class="fill" style="background-image:url('assests/img/fashinc1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/fashionc2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/fashionc3.jpg');"></div>
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
                        <a href="books.php">Books</a>
                    </li>
                    <li>
                        <a href="electronics.php">Electronics</a>
                    </li>
                    <li>
                        <a href="furniture.php">Furniture</a>
                    </li>
                </ul>
				</div>
				<div class="row text-center">

				 <ul class="pagination" >
                    
                    <li>
                        <a href="fashion.php">Grid</a>
                    </li>
                    <li>
                        <a href="fashion2.php">List</a>
                    </li>
                    <li>
                        <a href="fashion3.php">Map</a>
                    </li>
                </ul>
            </div>
        </div>
        
</div>
</div>
		
<div class="row">
            <!-- Sidebar Column -->
			<form id="searchForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="col-md-2" style=" font-family: Arial, Helvetica, sans-serif; font-size: 1.25em;margin-left:45px;">
						<div class="well" style="background-color:#fff7f8">

                <div class="list-group">
														<h4 align="center" >Sort By</h4>
				<div class="search_categories">
    <div class="select">
				<select name="selectSort" id="ddlViewBy" onchange="this.form.submit()">
		<option value="Select a value" >Select a value</option>
		<option value="Price: Low to High">Price: Low to High</option>
		<option value="Price: High to Low">Price: High to Low</option>
		<option value="Newest Arrivals">Newest Arrivals</option>
		</select></div></div></div>
		                <div class="list-group">
						
														<h4 align="center" >Categories</h4>
		<div class="search_categories">
    <div class="select">
		<select name="fashion_subCategory" id="fashion_subCategory" onchange="this.form.submit()">
		<option value="Select a value" >Select a value</option>
		<option value="Jackets">Jackets</option>
		<option value="Tops">Tops</option>
		<option value="Jeans">Jeans</option>
		<option value="Shoes">Shoes</option>
		<option value="Bags">Bags</option>
		<option value="Accessories">Accessories</option>
		<option value="Others">Others</option>
		</select></div></div>
				</div>
						                <div class="list-group">
																								<h4 align="center" >Price</h4>

										<div class="search_categories">
    <div class="select"><select name="fashion_priceRange" id="fashion_priceRange" onchange="this.form.submit()">
		<option value="Select a value" >Select a value</option>
		<option value="Less than $10">Less than $10</option>
		<option value="$10 to $50">$10 to $50</option>
		<option value="$50 to $100">$50 to $100</option>
		<option value="$100 to $500">$100 to $500</option>
		<option value="Greater than $500">Greater than $500</option>
		</select></div></div>
		</div>
								                <div class="list-group">
														<h4 align="center"  >Size</h4>
												<div class="search_categories">
    <div class="select"><select name="fashion_size" id="fashion_size" onchange="this.form.submit()">
		<option value="Select a value" >Select a value</option>
		<option value="XS">XS</option>
		<option value="S">S</option>
		<option value="M">M</option>
		<option value="L">L</option>
		<option value="XL">XL</option>
		</select></div></div>
		</div>
										                <div class="list-group">
														<h4 align="center" >Color</h4>
														<div class="search_categories">
    <div class="select"><select name="fashion_color" id="fashion_color" onchange="this.form.submit()">				
		<option value="Select a value" >Select a value</option>
		<option value="Blue">Blue</option>
		<option value="Green">Green</option>
		<option value="Yellow">Yellow</option>
		<option value="Red">Red</option>
		<option value="Black">Black</option>
		<option value="White">White</option>
		</select></div></div>
</div>
										               
                
            </div></div></form>
            <!-- Content Column -->
            <div class="col-md-9" style="margin-left:22px;">
			<div class="well" style=" background: url(assests/img/fashionbg2.jpg) no-repeat center fixed; background-size: cover;">
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[0][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[0][3]}";}
			  
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[0][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[0][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[0][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[0][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;">

                <a href="fashion_details_1.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[1][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[1][3]}";}
				?>" alt=""style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details_1.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[1][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[1][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[1][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[1][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;>

                <a href="fashion_details_2.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[2][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[2][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details_2.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[2][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[2][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[2][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[2][5]}";}
				?></h4></div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;>

                <a href="fashion_details_2.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[3][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[3][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[3][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[3][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[3][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[3][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[4][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[4][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[4][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[4][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[4][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[4][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
                			<div class="well" style="background-color:white;>
<a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[5][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[5][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[5][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[5][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[5][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[5][5]}";}
				?></h4></div>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;>

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[6][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[6][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[6][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[6][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[6][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[6][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;>

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[7][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[7][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="portfolio-item.html"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[7][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[7][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[7][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[7][5]}";}
				?></h4></div>
            </div>
            <div class="col-md-4 img-portfolio">
						<div class="well" style="background-color:white;>

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[8][3]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[8][3]}";}
				?>" alt="" style="height:250px;width:400px;">
                </a>
                <h3 align="center">
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[8][1]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[8][1]}";}
				?></a>
                </h3>
                <h4 align="center">$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jackets" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjackets[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Tops" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowtops[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Jeans" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowjeans[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Shoes" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowshoes[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Bags" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowbags[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Accessories" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowaccessories[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Select a value" && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XS" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXS[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="S" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeS[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="M" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeM[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="L" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeL[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="XL" && $fashion_color=="Select a value" && $fashion_priceRange=="Select a value")
				  { echo "{$rowsizeXL[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Blue" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblue[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Green" && $fashion_priceRange=="Select a value")
				  { echo "{$rowgreen[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Yellow" && $fashion_priceRange=="Select a value")
				  { echo "{$rowyellow[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Red" && $fashion_priceRange=="Select a value")
				  { echo "{$rowred[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="Black" && $fashion_priceRange=="Select a value")
				  { echo "{$rowblack[8][5]}";}
			   else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_size=="Select a value" && $fashion_color=="White" && $fashion_priceRange=="Select a value")
				  { echo "{$rowwhite[8][5]}";}
				?></h4></div>
            </div>
        </div>
        <!-- /.row -->
 </div></div>
        </div>
        

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
<hr>
        
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

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
