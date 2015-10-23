<?php
session_start();
$allowaccess=false;
if(!isset($_SESSION['CurrentUser']))
{
	echo "Please log in to access this page";
	
}else{
	$allowaccess=true;
}
?>