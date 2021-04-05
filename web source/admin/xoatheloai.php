<?php
     include "conn.inc.php";
	$theloai=$_GET["theloai"];
     $query_delete = "DELETE FROM theloai WHERE theloai = '$theloai'";
     $result_delete = mysql_query($query_delete) or die(mysql_error()); 
	 if($result_delete)  header("Location:index.php?thaotac=quanlytheloai");
	 else echo "Lỗi không xóa được !!!";
    /* header("Refresh: ; URL=listuser.php");
          echo "Bạn đang được chuyển đến trang chủ!<br>";
          echo "(Nếu trình duyệt không hỗ trợ, <a href=\"index.php?thaotac=quanlytheloai\">nhấn vào đây</a> để về trang trước !!!)";
     die();*/

?>
