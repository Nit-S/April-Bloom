<!DOCTYPE html>
<html>
<head>
	<title>madar</title>
</head>
<?php
$server="localhost";
$user="root";
$pass="";
$dbname="wtf";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
	die("lode lag gye");
}

$sql="select * from try where a = 1 ";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<span id=\"heading\">CH:" . $row["s_no."]. " " . $row["s_name"]. "</span> <br>";
    	echo $row["a"];
}
  }
  $conn->close();

?>


<body>

</body>
</html>