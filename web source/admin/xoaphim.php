<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa Phim</title>
</head>

<body>
<?php
     include "conn.inc.php";
	 $tenphim=$_GET["tenphim"];
     $query_delete = "DELETE FROM phim WHERE tenphim = '$tenphim'";
     $result_delete = mysql_query($query_delete) or die(mysql_error()); 
	 if($result_delete)  header("Location:index.php?id=quanlyphim");
	 else echo "Có lỗi";
    /* header("Refresh: 3; URL=listuser.php");
          echo "Bạn đang được chuyển đến trang chủ!<br>";
          echo "(Nếu trình duyệt không hỗ trợ, <a href=\"index.php?id=quanlyphim\">Nhấn vào đây</a>)";
     die();*/

?>
</body>
</html>
