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
$equipid=$_POST["t15"];

// sql to delete a record
$sql = "DELETE FROM equipment WHERE equipid='$equipid'";

if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>