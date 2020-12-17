<?php
$dbname=mysqli_connect("localhost","root","","sports_shop_management");
if(!$dbname)
{
die("could not connect".mysqli_error());
}
$var=mysqli_query($dbname,"select * from discount");
echo "<table>";
echo " <tr>
  <th>custid</th>
  <th>equipid</th>
  <th>discountpercentage</th>
</tr>";
while($arr=mysqli_fetch_row($var))
{
 echo " <tr>
  <td>$arr[0]</td>
  <td>$arr[1]</td>
  <td>$arr[2]</td>
</tr>";
}
echo "</table>";
mysqli_free_result($var);
mysqli_close($dbname);
?>


<br>
<br>
</form>
</body>
</html>