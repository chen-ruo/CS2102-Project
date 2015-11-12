<?php
session_start();
$allowaccess=false;
if(!isset($_SESSION['CurrentUser']))
{
	echo ("<script>alert('Please login to continue.')</script>");
	die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/index.php'</script>");
	
}else{
	$allowaccess=true;
}
?>