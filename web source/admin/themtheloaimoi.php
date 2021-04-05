
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
	$tl=$_POST['theloai'];
	$sql="insert into theloai(theloai) value('".$tl."')";
	mysql_query($sql) or die(mysql_error());
	header("Refresh: 3; URL=index.php?thaotac=quanlytheloai");
          echo "<div class='noidung'><br />Thêm thành công. Bạn đang được chuyển đến trang quản lý thể loại!<br>(Nếu trình duyệt không hỗ trợ, <a href=\"index.php?thaotac=quanlytheloai\">Nhấn vào đây</a>)<br /><br /></div>";
     die();
?>
