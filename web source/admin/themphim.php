<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>
<div class="td"><center>Thêm Bộ Phim Mới Cho WebSite</center></div>
<div style="background: white;">
<form name="f" action="index.php?id=themphimmoi" method="post" enctype="multipart/form-data">
<table class="table" width="100%">
    <tr width="100%">
		<td class="tdcon">Tên Phim:</td>
        <td class="tdcon"><input type="text" name="tenphim" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Hình Ảnh:</td>
        <td class="tdcon"><input type="file" name="anhminhhoa" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Diễn Viên:</td>
        <td class="tdcon"><input type="text" name="dienvien" /></td>
    </tr>
    <tr width="100%">
    	<td class="tdcon">Mô Tả:</td>
        <td class="tdcon"><textarea name="thongtinphim" rows="20" cols="122"></textarea>
        </td>
     </tr>
     <tr width="100%">
    	<td class="tdcon">Loại Phim</td>
        <td class="tdcon"><select name="theloai" size="1" onChange="replace(this.options.selectedIndex)">
    							<?php $sqlstr2=mysql_query("SELECT * FROM theloai");
	   											static $i=0;
												
	   											while($row_2=mysql_fetch_array($sqlstr2))
												{ 
													$array[$i]=	$row_2['theloai'];
													$i=$i+1;	
													echo  "<option value=".$row_2['theloai']." ".($row_2['theloai']==$row['theloai']?'Selected':'').">".$row_2['theloai']."</option>";		
												}
											
									?>		
    				</select>
        </td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Đạo Diễn:</td>
        <td class="tdcon"><input type="text" name="daodien" /></td>
    </tr>
    
    <tr width="100%">
		<td class="tdcon">Thời Lượng:</td>
        <td class="tdcon"><input type="text" name="thoiluongphim" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Năm Sản Xuất:</td>
        <td class="tdcon"><input type="date" name="namsanxuat" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Nơi Sản Xuất:</td>
        <td class="tdcon"><input type="text" name="noisanxuat" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Tags Phim:</td>
        <td class="tdcon"><input type="text" name="tags" /></td>
    </tr>
    <tr width="100%">
		<td class="tdcon">Link Phim:</td>
        <td class="tdcon"><input type="text" name="linkphim" /></td>
    </tr>
</table><br />
    <input type="submit" name="submit" value="Thêm" />
 			<a href="index.php?id=quanlyphim"><input type="button" value="Quay Lại"/></a>	
 
 </form>
</div>
<div class="bar"><a href="index.php?id=quanlyphim"><font color="yellow">Trở Về Trang Quản Lý Phim</font></a></div>
</div>
