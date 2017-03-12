<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">

body{
	background-color: rgb(190,190,190);
}

	/* for info and detail*/

.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    text-align: left;
    transition: 0.3s;
    margin: 20px 0px 20px 40px;
    float: left;
    background-color: rgb(255,255,255);

}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
#ID{
	width: 23%;
    padding: 10px 10px 10px 10px;
}
#bio{
    width: 68%
}
#s{
	width: 22%;
    padding: 10px 10px 10px 10px;
}
#heading{
	font: monospace;
	size: 12px;
}

	</style>






	<script type="text/javascript">
		
	</script>




</head>

<?php include('inc/datatemp.php');?>


<body>

<div class="jumbotron">
<h1 align="center">M. April Bloom</h1>
<h3 align="center">Welcome To My Story Collection</h3>
</div>
<!-- for info and details-->

<div class="row">
<div class="card" id="ID">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>M. April Bloom</b></h4> 
    <p>data to be id</p> 
  </div>
</div>

<div class="card" id="bio">
  <img src="img/road.jpg" alt="Avatar" height="150px" style="width:100%">
  <div class="container">
    <h4><b>M. A Bloom</b></h4> 
    <p>data d</p> 
  </div>
</div>

</div>
<!-- for story-->
<div class="row">
	
	<div id="s1">
		<div class="card" id="s">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
   <div class="container">
    <?php

$sql = "select * from story where s_no = 1 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span> <br><hr width=\"25%\" align=\"left\">";
         echo nl2br($row["s_intro"]);
}
  }
  ?>
  </div>
</div>

	</div>

	<div id="s2">
		<div class="card" id="s">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
   <div class="container">
    <?php

$sql = "select * from story where s_no = 2 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span> <br><hr width=\"25%\" align=\"left\">";
         echo nl2br($row["s_intro"]);
}
}  ?>
  </div>


</div>

	</div>

	<div id="s3">
		<div class="card" id="s">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <?php

$sql = "select * from story where s_no = 3 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span> <br><hr width=\"25%\" align=\"left\">";
         echo nl2br($row["s_intro"]);
}
  }
  ?>
  </div>





</div>

	</div>

	<div id="s4">
		<div class="card" id="s">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
 <div class="container">
    <?php

$sql = "select * from story where s_no = 4 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span> <br><hr width=\"25%\" align=\"left\">";
         echo nl2br($row["s_intro"]);
}
  }
  ?>
  </div>

<?php $conn->close(); ?>
</div>

	</div>

</div>



</body>
</html>