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
$sqlselectdefault= "SELECT * FROM electronics_details";
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


$sqlselectpricelth= "SELECT * FROM electronics_details ORDER BY price";
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
 
$sqlselectpricehtl= "SELECT * FROM electronics_details ORDER BY price desc";
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

$sqlselectarrivals= "SELECT * FROM electronics_details ORDER BY purchase_date desc";
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

$sqlselectjackets= "SELECT * FROM electronics_details WHERE sub_category = 'Laptops'";
$resultjackets = mysqli_query($conn, $sqlselectjackets);

if (mysqli_num_rows($resultjackets) > 0) {
    // output data of each row
	$rowlaptops=array();
    while($rowProdsjackets = mysqli_fetch_row($resultjackets)) {
		$rowlaptops[]=$rowProdsjackets;
    }
} else {
    echo "";
}

$sqlselecttops= "SELECT * FROM electronics_details WHERE sub_category = 'Mobiles'";
$resulttops = mysqli_query($conn, $sqlselecttops);

if (mysqli_num_rows($resulttops) > 0) {
    // output data of each row
	$rowmobiles=array();
    while($rowProdstops = mysqli_fetch_row($resulttops)) {
		$rowmobiles[]=$rowProdstops;
    }
} else {
    echo "";
}

$sqlselectjeans= "SELECT * FROM electronics_details WHERE sub_category = 'Others'";
$resultjeans = mysqli_query($conn, $sqlselectjeans);

if (mysqli_num_rows($resultjeans) > 0) {
    // output data of each row
	$rowothers=array();
    while($rowProdsjeans = mysqli_fetch_row($resultjeans)) {
		$rowothers[]=$rowProdsjeans;
    }
} else {
    echo "";
}


$sqlselectlessthan10= "SELECT * FROM electronics_details WHERE price BETWEEN 0 and 10";
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

$sqlselect11and50= "SELECT * FROM electronics_details WHERE price BETWEEN 11 and 50";
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
 
 
$sqlselect51and100= "SELECT * FROM electronics_details WHERE price BETWEEN 51 and 100";
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
 
$sqlselect101and500= "SELECT * FROM electronics_details WHERE price BETWEEN 101 and 500";
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

$sqlselectgreaterthan500= "SELECT * FROM electronics_details WHERE price > 500";
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

$fashion_sort="Select a value";
$fashion_subCategory = "Select a value";
$fashion_priceRange = "Select a value";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fashion_sort = $_POST["selectSort"];
$fashion_subCategory = $_POST["fashion_subCategory"];
$fashion_priceRange = $_POST["fashion_priceRange"];


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
                <div class="fill" style="background-image:url('assests/img/electronicsc1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/electronicsc2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('assests/img/electronicsc3.jpg');"></div>
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
                        <a href="fashion.php">Fashion</a>
                    </li>
                    <li>
                        <a href="furniture.php">Furniture</a>
                    </li>
                </ul>
				</div>
				<div class="row text-center">

				 <ul class="pagination" >
                    
                    <li>
                        <a href="electronics.php">Grid</a>
                    </li>
                    <li>
                        <a href="electronics2.php">List</a>
                    </li>
                    <li>
                        <a href="electronics3.php">Map</a>
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
						<div class="well" style="background-color:#dcdcdc">

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
		<option value="Laptops">Laptops</option>
		<option value="Mobiles">Mobiles</option>
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
								                        
                
            </div></div></form>
            <!-- Content Column -->
            <div class="col-md-9" style="margin-left:22px;">
			<div class="well" style=" background: url(assests/img/electronicsbg2.jpg) no-repeat center fixed; background-size: cover;">
        <!-- Projects Row -->
        <div class="row">

            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[0][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[0][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[0][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[0][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[0][5]}";}
			  
			  
				?></h4></div>
            </div>
			<hr>
			<div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][3]}";}
			  
			  
				?>" alt=""style="height:100px;width:100px;">
                </a>
				</div><div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[1][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[1][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[1][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[1][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[1][5]}";}
			  
			  
				?></h4></div></div>
				<hr>
				<div class="row">
				<div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[2][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[2][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[2][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[2][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[2][5]}";}
			  
			  
				?></h4></div>
            </div><hr>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[3][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[3][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[3][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[3][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[3][5]}";}
			  
			  
				?></h4></div>
            </div><hr>
			<div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[4][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[4][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[4][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[4][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[4][5]}";}
			  
			  
				?></h4></div>
            </div><hr>
			<div class="row">
            <div class="col-md-2">
<a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[5][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[5][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[5][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[5][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[5][5]}";}
			  
			  
				?></h4>
            </div>
        </div><hr>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="row-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[6][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[6][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[6][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[6][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[6][5]}";}
			  
			  
				?></h4></div>
            </div><hr>
			<div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="portfolio-item.html"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[7][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[7][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[7][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[7][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[7][5]}";}
			  
			  
				?></h4></div>
            </div><hr>
			<div class="row">
            <div class="col-md-2">

                <a href="fashion_details.php">
                    <img class="img-responsive img-hover img-thumbnail" src="<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][3]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][3]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][3]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][3]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][3]}";}
			  
			  
				?>" alt="" style="height:100px;width:100px;">
                </a></div>
				<div class="col-md-10">
                <h3>
                    <a href="fashion_details.php"><?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][1]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][1]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][1]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][1]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][1]}";}
			  
			  
				?></a>
                </h3>
                <h4>$<?php if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowdefault[8][5]}";}
					else if($fashion_sort=="Price: Low to High" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricelth[8][5]}";}
			  else if($fashion_sort=="Price: High to Low" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowpricehtl[8][5]}";}
			  else if($fashion_sort=="Newest Arrivals" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowarrivals[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Laptops" &&  $fashion_priceRange=="Select a value")
				  { echo "{$rowlaptops[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Mobiles"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowmobiles[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Others"  && $fashion_priceRange=="Select a value")
				  { echo "{$rowothers[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="Less than $10")
				  { echo "{$rowlessthan10[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" && $fashion_priceRange=="$10 to $50")
				  { echo "{$row11and50[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value" &&  $fashion_priceRange=="$50 to $100")
				  { echo "{$row51and100[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="$100 to $500")
				  { echo "{$row101and500[8][5]}";}
			  else if($fashion_sort=="Select a value" && $fashion_subCategory=="Select a value"  && $fashion_priceRange=="Greater than $500")
				  { echo "{$rowgreaterthan500[8][5]}";}
			  
			  
				?></h4></div>
            </div>
        </div>
        <!-- /.row -->
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
