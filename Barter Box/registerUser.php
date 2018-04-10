
<!-- <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barterbox";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$sql = "INSERT INTO user_details (name, emailID, password)
VALUES ('$name', '$emailID', '$password')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

 ?> -->

 <!-- <?php

if (isset($_POST['registerData'])) {
    $conn = new mysqli('localhost:3306', 'ketul', 'ketul', 'barterbox');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    
    $stmt = $conn->prepare("INSERT INTO user_details ( name, emailID, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $name, $emailID, $password);
    $name= $_POST['name'];
    $emailID= $_POST['emailID'];
    $password=$_POST['password'];
    $stmt->execute();

$stmt->close();
$conn->close();
}

?> -->


<!-- <?php

        if (isset($_POST['loginUser'])) {
        $conn = new mysqli('localhost:3306', 'ketul', 'ketul', 'barterbox');
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 

        $emailID=$_POST["emailID"];
        $password=$_POST["password"];
        $stmt = "select * from user_details where emailID=$emailID and password=$password";
        
        $result= $conn->query($stmt);
        if(is_null($result))
        {
            echo "please enter correct values";
        }
    }

    ?> -->
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <!-- <?php

        if (isset($_POST['loginUser'])) {
        $conn = mysqli_connect('localhost:3306', 'ketul', 'ketul', 'barterbox');
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        } 

        $emailID=$_POST["emailID"];
        $password=$_POST["password"];
        $stmt = "SELECT * from user_details where emailID=$emailID and password=$password";
        
        $result= mysqli_query($conn, $stmt);

        if(mysqli_num_rows($result) > 0){
            echo "hello";
        }
        else
        {
            echo "wrong";
        }

    }
    


    ?> -->

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect('localhost:3306', 'ketul', 'ketul', 'barterbox');
        $emailID = mysqli_real_escape_string($conn,$_POST['emailID']);
        $password = mysqli_real_escape_string($conn,$_POST['password']); 

        $sql = "SELECT * FROM user_details WHERE emailID = '$emailID' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      if($count == 1) {
         //header("location: index.php");
         echo "askdh";
      }else {
         echo "wrong";
      }

    }
    ?>

    </body>
    </html>