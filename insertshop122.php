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
$branchid=$_POST["t1"];
$branchname=$_POST["t2"];
$location=$_POST["t3"];
$sql = "INSERT INTO shop(branchid,branchname,location)
VALUES ('$branchid','$branchname','$location')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
