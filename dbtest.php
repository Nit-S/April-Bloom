<!DOCTYPE html>
<html>
<head>
	<title>madar</title>
</head>
<?php
$server="localhost";
$user="";
$pass="";
$dbname="bloom";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
	die("lode lag gye");
}

$sql="select * from story";
$result=$conn->query($sql);

if($result->num_rows > 0){

}else{
	echo "0 result";
}
$conn->close();

?>


<body>

</body>
</html>