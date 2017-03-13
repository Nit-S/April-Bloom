<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">


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

<div class="paralax">
<body>
<?php include('inc/header.php'); ?>


<!-- for info and details-->

<div class="row">
<div class="card" id="ID">
  <img src="img/download.jpeg" alt="Avatar" style="width:100%">
  <div class="container">







    <h4><b>M. April Bloom</b></h4> 
    <p>further details as per authors support</p> 





  </div>
</div>

<div class="card" id="bio">
  <img src="img/header.jpg" alt="Avatar" height="200px" style="width:100%">
  <div class="container">
<div class="col-md-10" align="left">







<br>
    <p>I have written 4 stories for Maid Sama!, and Pride and Prejudice.</p><br>
    <p>I have been writing for a long time now, but never thought it good enough to be exposed. So here i am fighting my fears and getting inspired by the amazing writers and their works here, in a hope to please the expectant on the other end :)</p><br>
    <p>so, now for some trivia about me;</p><br>
    <p>I am a girl, as obvious from my name. I have dark chocolate brown hair, which looks like they have been permed. Trust me frizz controls do not work wonders as they claim, at least not on me. I am an under-grad student with chemistry as my major subject, yup, chemistry major; i am a freak.</p><br>
    <p>four things that i am completely crazy about:</p><br>
    <ol>
      <li>Pride and Prejudice (Mr. Darcy and Elizabeth(duh!))</li>
      <li>Maid sama (Takumi, Takumi, Takumi, Takumi, and Takumi x Misaki)</li>
      <li>Gossip girl (Chuck and Blair and their future fics)</li>
      <li>Fifty Shades of Grey (Christian and Ana )</li>
    </ol><br>
    <p>Now, i know all four sets are completely opposite in personalities, but that is what being a fan is all about isn't it?</p><br>
    <p>I have had many phases, the Harry Potter phase; Twilight phase; POTC phase; the romantic novels phase; the anime/manga phase; the TV series phase, but i just never came out of these four addictions( i guess that's the right way to put it).</p><br>







</div>
  </div>
</div>

</div>
<!-- for story-->
<div class="row">
	
	<div id="s1">
		<div class="card" id="s" onclick="window.location.href='story1-view.php?chap=1'">
  <img src="img/nlmg.jpg" alt="Avatar" style="width:100%" height="400px">
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
		<div class="card" id="s" onclick="window.location.href='story2-view.php?chap=1'">
  <img src="img/aom.jpg" alt="Avatar" style="width:100%" height="400px">
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
		<div class="card" id="s"  onclick="window.location.href='story3-view.php?chap=1'">
  <img src="img/yam.jpg" alt="Avatar" style="width:100%" height="400px">
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
		<div class="card" id="s"  onclick="window.location.href='story4-view.php?chap=1'">
  <img src="img/sbtdb.jpg" alt="Avatar" style="width:100%" height="400px">
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


<?php include('inc/footer.php'); ?>
</body>
</div>
</html>