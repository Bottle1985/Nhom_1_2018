<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:center.php');
?>

<div class="bar">Quản Lý Thành Viên Website</div>

<?php 
	require("conn.inc.php");
	$sql="select * from users order by username asc";
	$kq=mysql_query($sql)or die(mysql_error());
	if(mysql_num_rows($kq)>0)
	{
?>

<div style="background: white;">
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
<td class="td">Sửa</td>
<td class="td">Xóa</td>
</tr>
<?php 
while ($row=mysql_fetch_array($kq))
{
echo"
 <tr><td class='tdcon'>$row[username]</td>
	 <td class='tdcon'>$row[hovaten]</td>
	 <td class='tdcon'>$row[diachi]</td>
	 <td class='tdcon'>$row[ngaysinh]</td>
	 <td class='tdcon'>$row[gioitinh]</td>
	 <td class='tdcon'>$row[dienthoai]</td>
     <td class='tdcon'>$row[email]</td>
   	 <td class='tdcon'>$row[theloaiyeuthich]</td>
	 <td class='tdcon'><a href=index.php?username=$row[username]&thaotac=update>Sửa</a></td>
	 <td class='tdcon'><a href=\"deleteuser.php?username=$row[username]\" onClick=\"return confirm('Bạn chắc chắn muốn xoá người dùng này?');\">Xóa</a></td>
</tr>";
}
echo"</tbody></table>";
}
?>
</div></div>
