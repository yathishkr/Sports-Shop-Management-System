<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports_shop_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$equipid=$_POST["t15"];
$custid=$_POST["t16"];
$branchid=$_POST["t17"];
$sportsname=$_POST["t18"];
$equipname=$_POST["t19"];
$price=$_POST["t20"];
$bookeddate=$_POST["t21"];
$sql = "INSERT INTO equipment(equipid,custid,branchid,sportsname,equipname,price,bookeddate)
VALUES ('$equipid','$custid','$branchid','$sportsname','$equipname','$price','$bookeddate')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>