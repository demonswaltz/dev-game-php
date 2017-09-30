<!DOCTYPE html>
<html>
<body>
	
<?php 
	include '../login.php'; 
	$connect=mysqli_connect($hn,$un,$pw,$db);
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
?>
<?php
$sql = "EXPLAIN SELECT * FROM (SELECT *, CONCAT(color,number) AS col_num FROM `dev-main`) a WHERE col_num >= 'blue5' OR col_num <='blue28' ORDER BY color, number";
$result = $connect->query($sql);
$row = $result->fetch_array(MYSQLI_NUM);
echo $row[0];
//if ($result->num_rows > 0) {
    // output data of each row
  //  while($row = $result->fetch_assoc()) {
       //echo "$row[color_num]"; 
    //   echo "id: " . $row["id"]. " - Name: " . $row["color"]. " " . $row["number"]. "<br>";
   // }
//} else {
  //  echo "0 results";
//}

?>


</body>
</html>
