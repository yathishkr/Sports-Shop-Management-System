<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sports_shop_management";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection failed: ".$conn->connect_error);
}
else
{
echo "Connected";
}
$shop=$_POST['t25'];
$sql="select branchid,branchname,location from shop where branchid='$student'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table border='10' bgcolor=lightblue>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td> branchid </td><td>".$row["branchid"]."</td></tr>";
                echo "<tr><td> branchname </td><td>".$row["branchname"]."</td></tr>";
                echo "<tr><td> Location </td><td>".$row["location"]."</td></tr>";
		
	}
	echo"</table>";
}
else{
	echo "0 results";
}

?>
