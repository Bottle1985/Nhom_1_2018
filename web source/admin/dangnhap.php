<?php
require('../include/header.php');
?>
<?php

error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION)) session_start();
include "config.php";
if (isset($_POST['submit']))
{
     $query = "SELECT username, password FROM admin WHERE username = '" .
          $_POST['username'] . "' AND password ='". $_POST['password']
          ."';";
     $result = mysql_query($query) or die(mysql_error());

     if (mysql_num_rows($result) == 1)
     {
          $_SESSION["log_user"] = $_POST['username'];
          $_SESSION["log_password"] = $_POST['password'];
          header("Refresh: 5; URL=index.php");
          echo "Đăng nhập thành công. Bạn đang được chuyển đến trang chủ!<br>";
          echo "(Nếu thấy lâu có thể, <a href=\"index.php\">nhấn vào đây</a>)";
     }
     else
     {
?>
          Username hoặc password không hợp lệ<br>
          <form action="index.php?id=login" method="post">
          Username: <input type="text" name="username"><br>
          Password: <input type="password" name="password"><br><br>
          <input type="submit" name="submit" value="Login">
          <input type="reset" name="reset" value="Hủy">
          </form>
<?php
     }
}
else
{

?>
	<div align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;Đăng nhập:</h1></div>
     Nhập username và Password...<br>
  
     <form action="index.php?id=login" method="post">    
     Username: <input type="text" name="username"><br>
     Password: <input type="password" name="password"><br><br>
     <div align="center">
     <input type="submit" name="submit" value="Login">
     <input type="reset" name="reset" value="Hủy">
     </div>
     </form>
     <?php 
	 }
?>

