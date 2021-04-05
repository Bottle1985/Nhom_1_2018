<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đồ Án 4 Quản Trị Web Phim</title>
</head>

<body>
<?php
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION)) session_start();
?>
<?php
include("../admin/header.php");
?>

<?php
include("center.php")
?>

<?php
include("../admin/footer.php");
?>
</body>
</html>
