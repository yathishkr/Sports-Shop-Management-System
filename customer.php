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
$custid=$_POST["t4"];
$custname=$_POST["t5"];
$address=$_POST["t6"];
$phoneno=$_POST["t7"];
$sql = "INSERT INTO customer(custid,custname,address,phoneno)
VALUES ('$custid','$custname','$address','$phoneno')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>