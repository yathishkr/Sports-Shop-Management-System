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
  $shop=$_POST["t1"];
  $sql= "select branchid,branchname,location from shop where branchid='$shop'";
  		$result=$conn->query($sql);
if($result->num_rows>0)
		{
			echo "<table border='10' bgcolor=lightblue>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td> branchid </td><td>" .$row["branchid"]."</td></tr>";
				echo "<tr><td> branchname </td><td>" .$row["branchname"]."</td></tr>";
				echo "<tr><td> location </td><td>" .$row["location"]."</td></tr>";
				

			}
		}
		
?>
</body>
</html>