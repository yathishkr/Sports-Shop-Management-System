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
$empid=$_POST["t8"];
$empname=$_POST["t9"];
$salary=$_POST["t10"];
$email=$_POST["t11"];
$branchid=$_POST["t12"];
$sql = "INSERT INTO employee(empid,empname,salary,email,branchid)
VALUES ('$empid','$empname','$salary','$email','$branchid')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>