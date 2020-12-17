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
  $booking=$_POST["t4"];
  $sql= "select bookeddate,branchid from booking where bookeddate='$booking'";
  		$result=$conn->query($sql);
if($result->num_rows>0)
		{
			echo "<table border='10' bgcolor=lightblue>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td> bookeddate </td><td>" .$row["bookeddate"]."</td></tr>";
				echo "<tr><td> branchid </td><td>" .$row["branchid"]."</td></tr>";
				
				

			}
		}
		
?>
</body>
</html>