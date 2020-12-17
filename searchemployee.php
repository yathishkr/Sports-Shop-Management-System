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
  $employee=$_POST["t3"];
  $sql= "select empid,empname,salary,email,branchid from employee where empid='$employee'";
  		$result=$conn->query($sql);
if($result->num_rows>0)
		{
			echo "<table border='10' bgcolor=lightblue>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td> empid </td><td>" .$row["empid"]."</td></tr>";
				echo "<tr><td> empname </td><td>" .$row["empname"]."</td></tr>";
				echo "<tr><td> salary </td><td>" .$row["salary"]."</td></tr>";
				echo "<tr><td> email </td><td>" .$row["email"]."</td></tr>";
                                echo "<tr><td> branchid </td><td>" .$row["branchid"]."</td></tr>";

			}
		}
		
?>
</body>
</html>