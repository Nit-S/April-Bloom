<!DOCTYPE html>
<html>
<head>
	<title>story1</title>
	 <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			<div class="col-md-12">
    <?php

$sql = "select * from story where s_no = 1 ";
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
		
		$sql = "select * from nlmg where c_no = 1 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=1'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=2'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 2 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=1'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=3'"> NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 3 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=2'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=4'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 4 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=3'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=5'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 5 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=4'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=6'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 6 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=5'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=7'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 7 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=6'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=8'">NEXT >></button>
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
		
		$sql = "select * from nlmg where c_no = 8 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=7'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=9'">NEXT >></button>
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
















case '9':
		
		$sql = "select * from nlmg where c_no = 9 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=8'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=10'">NEXT >></button>
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
















case '10':
		
		$sql = "select * from nlmg where c_no = 10 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=9'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=11'">NEXT >></button>
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
















case '11':
		
		$sql = "select * from nlmg where c_no = 11 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=10'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=12'">NEXT >></button>
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
















case '12':
		
		$sql = "select * from nlmg where c_no = 12 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=11'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=13'">NEXT >></button>
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
















case '13':
		
		$sql = "select * from nlmg where c_no = 13 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=12'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=14'">NEXT >></button>
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
















case '14':
		
		$sql = "select * from nlmg where c_no = 14 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=13'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=15'">NEXT >></button>
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
















case '15':
		
		$sql = "select * from nlmg where c_no = 15 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=14'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=16'">NEXT >></button>
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
















case '16':
		
		$sql = "select * from nlmg where c_no = 16 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=15'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=17'">NEXT >></button>
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
















case '17':
		
		$sql = "select * from nlmg where c_no = 17 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=16'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=18'">NEXT >></button>
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











case '18':
		
		$sql = "select * from nlmg where c_no = 1 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=17'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=19'">NEXT >></button>
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










case '19':
		
		$sql = "select * from nlmg where c_no = 19 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=18'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=20'">NEXT >></button>
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
















case '20':
		
		$sql = "select * from nlmg where c_no = 20 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=19'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=21'">NEXT >></button>
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
















case '21':
		
		$sql = "select * from nlmg where c_no = 21 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=20'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=22'">NEXT >></button>
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
















case '22':
		
		$sql = "select * from nlmg where c_no = 22 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=21'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=23'">NEXT >></button>
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
















case '23':
		
		$sql = "select * from nlmg where c_no = 23 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=22'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=23'">NEXT >></button>
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


			$sql = "select * from nlmg where c_no = 1 ";
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
  <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=1'"><< PREV</button>
  
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">CHAPTERS<span class="caret"></span> </button>
<ul class="dropdown-menu" role="menu">
     		 <li><a href="story1-controller.php?option=1">chapter 1</a></li>
      <li><a href="story1-controller.php?option=2">chapter 2</a></li>
            <li><a href="story1-controller.php?option=3">chapter 3</a></li>
      <li><a href="story1-controller.php?option=4">chapter 4</a></li>
            <li><a href="story1-controller.php?option=5">chapter 5</a></li>
      <li><a href="story1-controller.php?option=6">chapter 6</a></li>
            <li><a href="story1-controller.php?option=7">chapter 7</a></li>
      <li><a href="story1-controller.php?option=8">chapter 8</a></li>
            <li><a href="story1-controller.php?option=9">chapter 9</a></li>
      <li><a href="story1-controller.php?option=10">chapter 10</a></li>
            <li><a href="story1-controller.php?option=11">chapter 11</a></li>
      <li><a href="story1-controller.php?option=12">chapter 12</a></li>
            <li><a href="story1-controller.php?option=13">chapter 13</a></li>
      <li><a href="story1-controller.php?option=14">chapter 14</a></li>
            <li><a href="story1-controller.php?option=v15">chapter 15</a></li>
      <li><a href="story1-controller.php?option=16">chapter 16</a></li>
            <li><a href="story1-controller.php?option=17">chapter 17</a></li>
      <li><a href="story1-controller.php?option=18">chapter 18</a></li>
            <li><a href="story1-controller.php?option=19">chapter 19</a></li>
      <li><a href="story1-controller.php?option=20">chapter 20</a></li>
            <li><a href="story1-controller.php?option=21">chapter 21</a></li>
      <li><a href="story1-controller.php?option=22">chapter 22</a></li>
      		<li><a href="story1-controller.php?option=23">chapter 23</a></li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location.href='story1-controller.php?option=2'">NEXT >></button>
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





</body>
</html>








