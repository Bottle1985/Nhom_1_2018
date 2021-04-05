<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION))
header('location:center.php'); 
?>
<div class="noidung"><h1> Chào Mừng Đến Với Trang Quản Trị Admin</h1></div>
<div class="menu"><img src="/doan/giao-dien/images/new.gif" /> <a href="index.php?thaotac=listuser"><font color="white">Quản lý người dùng</font></a></div>
<div class="menu"><img src="/doan/giao-dien/images/new.gif" /> <a href="index.php?thaotac=quanlyphim"><font color="white">Quản lý phim</font></a></div>
<div class="menu"><img src="/doan/giao-dien/images/new.gif" /> <a href="index.php?thaotac=quanlytheloai"><font color="white">Quản lý thể loại</font></a></div>
<div class="menu"><img src="/doan/giao-dien/images/new.gif" /> <a href="logout.php"><font color="white">Thoát</font></a></div>
 </div>

