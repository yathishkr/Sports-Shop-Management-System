<html>
<body>
<?php
session_start();
  $conn=mysqli_connect('localhost','root','','sports_shop_management');
  if($conn){
echo "Connected";
  }
  else{
	  echo "No Connection";
  }
  $customer=$_POST["t2"];
  $sql= "select custid,custname,address,phoneno from customer where custid='$customer'";
  		$result=$conn->query($sql);
if($result->num_rows>0)
		{
			echo "<table border='10' bgcolor=lightblue>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td> custid </td><td>" .$row["custid"]."</td></tr>";
				echo "<tr><td> custname </td><td>" .$row["custname"]."</td></tr>";
				echo "<tr><td> address </td><td>" .$row["address"]."</td></tr>";
				echo "<tr><td> phoneno </td><td>" .$row["phoneno"]."</td></tr>";

			}
		}
		
?>
</body>
</html>