<?php

$option=$_GET['option'];

switch ($option) {
	case '1':
header('Location:story2-view.php?chap=1');
		break;
	case '2':
header('Location:story2-view.php?chap=2');
		break;	
	case '3':
header('Location:story2-view.php?chap=3');
		break;	
	case '4':
header('Location:story2-view.php?chap=4');
		break;	
	case '5':
header('Location:story2-view.php?chap=5');
		break;	
	case '6':
header('Location:story2-view.php?chap=6');
		break;	
	case '7':
header('Location:story2-view.php?chap=7');
		break;	
	case '8':
header('Location:story2-view.php?chap=8');
		break;	
	
	default:
		header('Location:story2-view.php?chap=1');
}




?>