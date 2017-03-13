<!DOCTYPE html>
<html>
<head>
	<title>story2</title>
	 <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">




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
<?php include('inc/header.php'); ?>
<div class="paralax">
<body>

<div class="container">
	<div class="row" class="card">
		<div class="col-md-3"><img src="img/aom.jpg" alt="avatar" style="width: 100%" onclick="window.location.href='home.php'"></div>
		<div class="col-md-9">
			<div class="card">
			<div class="col-md-12">
    <?php

$sql = "select * from story where s_no = 2 ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["s_no"]. ". " . $row["s_name"]. "</span>"; ?>
          </div>



<div class="container">
        <?php

        echo" <br><hr width=\"25%\" align=\"left\">"; 
         echo nl2br($row["s_intro"]);
}
  }
  ?>
  </div>
			</div>
		</div>

	</div>

<div class="row">





<div class="card" id="story">


<?php

$select=$_GET['chap'];
switch ($select) {
  case '1':
    
    $sql = "select * from aom where c_no = 1 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=2'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;

    case '2':
    
    $sql = "select * from aom where c_no = 2 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=1'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=3'"> NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }


    break;







case '3':
    
    $sql = "select * from aom where c_no = 3 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=2'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=4'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;












case '4':
    
    $sql = "select * from aom where c_no = 4 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=3'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=5'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;
















case '5':
    
    $sql = "select * from aom where c_no = 5 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=4'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=6'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;
















case '6':
    
    $sql = "select * from aom where c_no = 6 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=5'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=7'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;
















case '7':
    
    $sql = "select * from aom where c_no = 7 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=6'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=8'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;
















case '8':
    
    $sql = "select * from aom where c_no = 8 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=7'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }

    break;












  
  default:


      $sql = "select * from aom where c_no = 1 ";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row?>
    <div class="row">
    <div class="col-md-7">

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<span id=\"heading\">" . $row["c_no"]. ". " . $row["c_name"]. "</span>";
        ?></div>
        <div class="col-md-5" align="right" >

        <div class="btn-group">
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
         <li><a href="story2-controller.php?option=1">chapter 1</a></li>
      <li><a href="story2-controller.php?option=2">chapter 2</a></li>
            <li><a href="story2-controller.php?option=3">chapter 3</a></li>
      <li><a href="story2-controller.php?option=4">chapter 4</a></li>
            <li><a href="story2-controller.php?option=5">chapter 5</a></li>
      <li><a href="story2-controller.php?option=6">chapter 6</a></li>
            <li><a href="story2-controller.php?option=7">chapter 7</a></li>
      <li><a href="story2-controller.php?option=8">chapter 8</a></li> 
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story2-controller.php?option=2'">NEXT >></button>
  </div>
</div>

        </div>
        </div>

        <?php
         echo" <br><hr width=\"25%\" align=\"left\">";
         echo nl2br("<span id=\"stext\">".$row["c_txt"]."</span>");
         echo" <br><hr width=\"25%\" align=\"left\">";
          echo nl2br("<span id=\"stext\">A/N:  ".$row["c_a/n"]."</span>");

        }
    }



}


?>












</div>
</div>

</div>




<?php include('inc/footer.php'); ?>
</body>
</div>
</html>








