<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>

<?php
	$_get=$_POST['theloaimoi'];
	 $ten=$_POST['theloai'];
	 $sql_edit="update theloai set theloai='".$ten."' where theloai='".$_get."'";
	 mysql_query($sql_edit) or die(mysql_error());
	header("Location: index.php?thaotac=quanlytheloai");
?>
