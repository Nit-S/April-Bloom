<?php

$option=$_GET['option'];

switch ($option) {
	case '1':
header('Location:story4-view.php?chap=1');
		break;
	case '2':
header('Location:story4-view.php?chap=2');
		break;	

	
	default:
		header('Location:story4-view.php?chap=1');
}




?>