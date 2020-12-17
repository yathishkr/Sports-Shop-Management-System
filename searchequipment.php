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
  $equipment=$_POST["t5"];
  $sql= "select equipid,custid,branchid,sportsname,equipname,price,bookeddate from equipment where equipid='$equipment'";
  		$result=$conn->query($sql);
if($result->num_rows>0)
		{
			echo "<table border='10' bgcolor=lightblue>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td> equipid </td><td>" .$row["equipid"]."</td></tr>";
				echo "<tr><td> custid </td><td>" .$row["custid"]."</td></tr>";
				echo "<tr><td> branchid </td><td>" .$row["branchid"]."</td></tr>";
                                echo "<tr><td> sportsname </td><td>" .$row["sportsname"]."</td></tr>";
				echo "<tr><td> equipname </td><td>" .$row["equipname"]."</td></tr>";
				echo "<tr><td> price </td><td>" .$row["price"]."</td></tr>";
				echo "<tr><td> bookeddate </td><td>" .$row["bookeddate"]."</td></tr>";

			}
		}
		
?>
</body>
</html>