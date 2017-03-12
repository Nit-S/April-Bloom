<!DOCTYPE html>
<html>
<head>
	<title>story1</title>
	 <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">

body{
	background-color: rgb(211,211,211);
}
hr{
	align-self: center;
	width: 50%;
	/* for info and detail*/
}
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    text-align: left;
    transition: 0.3s;
    margin: 20px 20px 20px 20px;
    padding: 20px 20px 20px 20px;
    background-color: rgb(255,255,255);

}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
/* Add some padding inside the card container */

	</style>

	<script type="text/javascript">
		
	</script>
</head>
<?php include('inc/datatemp.php'); ?>
<body>

<div class="container">
	<div class="row" class="card">
		<div class="col-md-3"><img src="img/download.jpeg" alt="avatar" style="width: 100%"></div>
		<div class="col-md-9">
			<div class="card">
    <h4><b>Never Let Me Go</b></h4> 
    <p>data to be id</p> 
			</div>
		</div>
	</div>


<div class="row">

<div class="card" id="story">
    <?php

$sql = "select * from nlmg where s_no = 1 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span> <br><hr width=\"25%\" align=\"left\">";
         echo nl2br($row["s_intro"]);
}
  }
  ?>
<hr>
A/N:
</div>
</div>

</div>

</body>
</html>



