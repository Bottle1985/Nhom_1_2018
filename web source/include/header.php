<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Đồ Án 4 - Thiết Kế Web Gợi Ý Xem Phim PHP</title>
<meta charset="UTF-8">
<link href="/doan/giao-dien/style.css" type="text/css" rel="stylesheet" />
<link rel= "shortcut icon" href="/doan/giao-dien/favicon.png"/>
<link rel= "icon" href="/doan/giao-dien/favicon.png"/>
</head>
<body >
<div id="wrapper">
<div id="header">
<div class="headcontainer">
<div class="logo">
<a href="/doan"><img src="/doan/logo.png" alt="Đồ Án 4 - Nhóm 1" title="Đồ Án 4 - Nhóm 1" /></a>
</div>
</div>  
<div id="menu" class="default">    
<ul class="container menu" id="nav">            
<li class="home"><a href="/doan">TRANG CHỦ</a></li>            
<li><a href="/doan/gioi-thieu.html">GIỚI THIỆU</a></li>
<li><a href="/doan/lien-he.html">LIÊN HỆ</a></li>
<li><a href="/doan/dang-ky.html">ĐĂNG KÝ</a></li>
<li>
<div class="widget_search">
<form method="GET" id="form-search" action="/doan/tim-kiem.php">
<div><input type="text" name="tukhoa" placeholder="Tìm Kiếm Theo : Tên Phim, Đạo Diễn, Diễn Viên" value="">
<input name="" id="searchsubmit" class="" value=" " type="submit"></div></form>
             </li>             
         </ul>    
    </div>      
</div>
<?php
require('slide/demo.html');
?>
<div id="body-wrap" class="container">