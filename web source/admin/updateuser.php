<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>


<div class="bar">Cập Nhật Thông Tin Tài Khoản </div>
<div class="noidung">




<?php
if (isset($_POST['submit']) && ($_POST['submit'] == "Update"))
{
     $query_update = "UPDATE users SET username = '" . $_POST['username'] . "',
     hovaten = '" . $_POST['hovaten'] . "', dienthoai = '" . $_POST['dienthoai'] . "', email = '" . $_POST['email'] . "',  gioitinh = '" . $_POST['gioitinh'] . "', ngaysinh = '" . $_POST['ngaysinh'] . "', theloaiyeuthich = '" . $_POST['theloaiyeuthich'] . "', diachi = '" . $_POST['diachi'] . "'  WHERE username = '" .$_POST["username"]."'";
     $result_update = mysql_query($query_update) or die(mysql_error());
     $query = "SELECT * FROM users WHERE username = '" .$_POST["username"]."'";
     $result = mysql_query($query) or die(mysql_error());
	 $row = mysql_fetch_array($result);
	
 ?>
 
     <br /><br /><b><font color="yellow">Tài khoản của bạn vừa được cập nhật thành công.</font></b><br /><br /><br />
     <form action="index.php?thaotac=update" method="post">
      
    Họ tên: <input type="text" name="hovaten" value="<?php echo $row["hovaten"];?>"/><br /><br />
    Nơi ở: <input type="text" name="diachi" value="<?php echo $row["diachi"];?> "/><br /><br />
    Ngày sinh: <input type="text" name="ngaysinh" value="<?php echo $row["ngaysinh"];?>"/><br /><br />
    Giới tính:<input type="text" name="gioitinh" value="<?php echo $row["gioitinh"];?>"/><br /><br />
    Điện thoại: <input type="text" name="dienthoai" value="<?php echo $row["dienthoai"];?>"/><br /><br />
    E-Mail: <input type="text" name="email" value="<?php echo $row["email"];?>"/><br /><br />
    Thể loại yêu thích: <input type="text" name="theloaiyeuthich" value="<?php echo $row["theloaiyeuthich"];?> "/><br /><br />
    <input type="submit" name="submit" value="Update"> &nbsp; &nbsp;
    <input type="button" value="Cancel" onClick="history.go(-1);">
    </form><br /><br />
    <div class="bar"><b><a href="/doan/admin/index.php?thaotac=listuser"><font color="yellow">Trở Về Trang Thông Tin Tài Khoản</font></a></b></div>
<?php
}
else
{
	$username=$_GET["username"];
     $query = "SELECT * FROM users WHERE username = '$username'";
     $result = mysql_query($query) or die(mysql_error());
     $row = mysql_fetch_array($result);
?>
<table class="table" width="100%">
<tbody><tr> 
<td class="td">Username</td></td>
<td class="td">Họ tên</td>
<td class="td">Địa chỉ</td>
<td class="td">Ngày sinh</td>
<td class="td">Giới tính</td>
<td class="td">Điện thoại</td>
<td class="td">Email</td>
<td class="td">T.Loại yêu thích</td>
</tr>
<tr>
<td class='tdcon'><?php echo $row["username"] ?></td>
<td class='tdcon'><?php echo $row["hovaten"];?></td>
<td class='tdcon'><?php echo $row["diachi"];?></td>
<td class='tdcon'><?php echo $row["ngaysinh"];?></td>
<td class='tdcon'><?php echo $row["gioitinh"];?></td>
<td class='tdcon'><?php echo $row["dienthoai"];?></td>
<td class='tdcon'><?php echo $row["email"];?></td>
<td class='tdcon'><?php echo $row["theloaiyeuthich"];?></td>
</tr></tbody></table>

<br /><br />Bảng bên trên là thông tin hiện tại của tài khoản.

<form action="index.php?thaotac=update" method="post">
      
    <input type="hidden" name="username" value="<?php echo $username ?>"/><br /><br />
    Họ tên: <input type="text" name="hovaten" value="<?php echo $row["hovaten"];?>"/><br /><br />
    Nơi ở: <input type="text" name="diachi" value="<?php echo $row["diachi"];?> "/><br /><br />
    Ngày sinh: <input type="text" name="ngaysinh" value="<?php echo $row["ngaysinh"];?>"/><br /><br />
    Giới tính: <input type="text" name="gioitinh" value="<?php echo $row["gioitinh"];?>"/><br /><br />
    Điện thoại: <input type="text" name="dienthoai" value="<?php echo $row["dienthoai"];?>"/><br /><br />
    E-Mail: <input type="text" name="email" value="<?php echo $row["email"];?>"/><br /><br />
    Thể loại yêu thích: <input type="text" name="theloaiyeuthich" value="<?php echo $row["theloaiyeuthich"];?> "/><br /><br />
    <input type="submit" name="submit" value="Update"> &nbsp; &nbsp; 
    <input type="button" value="Cancel" onClick="history.go(-1);">
   </form><br /><br />
   <div class="bar"><b><a href="/doan/admin/index.php?thaotac=listuser"><font color="yellow">Trở Về Trang Thông Tin Tài Khoản</font></a></b></div>
<?php
}
?>
</div>
</div>
