<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
$_get=$_GET['id'];
	$array=array(50);
	$sql="Select * from phim where id='$_get'";
	$result=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($result);
?>
<div style="background: white;">
<form name="f" action="index.php?thaotac=suaphimmoi" method="POST" enctype="multipart/form-data">

	<div class="bar">Sửa Thông Tin Phim : <?php echo $row['tenphim']; ?></div>
<table class="table" width="100%">
    <tr >
  	    <td class="tdcon">Tên Phim</td>
	   	<td class="tdcon">
	    			<input type="text" name="tenphimmoi"  value="<?php echo $row['tenphim']; ?>"   size="40" />   </td>
	</tr>
    <tr>
		<td class="tdcon">Hình Ảnh</td>
        <td class="tdcon"><input type="file" name="anhminhhoamoi"  value="<?php echo $row['anhminhhoa']; ?>"/></td>
    </tr>
    <tr>
		<td class="tdcon">Diễn Viên</td>
        <td class="tdcon"><input type="text" name="dienvienmoi"  value="<?php echo $row['dienvien']; ?>"   size="40" /></td>
    </tr>
   	<tr>
    	<td class="tdcon">Mô Tả</td>
        <td class="tdcon"> <textarea name="thongtinphimmoi" rows="20" cols="122"><?php echo $row['thongtinphim']; ?></textarea>
        </td>
     </tr>
     <tr >
	   			<td class="tdcon">Thể Loại</td>
    			<td class="tdcon">
                	<select name="theloaimoi" size="1" onchange="replace(this.options.selectedIndex)">
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
    <tr>
		<td class="tdcon">Đạo Diễn</td>
        <td class="tdcon"><input type="text" name="daodienmoi"  value="<?php echo $row['daodien']; ?>"   size="40" /></td>
    </tr>
	    <tr>
		<td class="tdcon">Thời Lượng</td>
        <td class="tdcon"><input type="text" name="thoiluongphimmoi"  value="<?php echo $row['thoiluongphim']; ?>"   size="40" /></td>
    </tr>
       <tr>
		<td class="tdcon">Năm Sản Xuất</td>
        <td class="tdcon"><input type="date" name="namsanxuatmoi"  value="<?php echo $row['namsanxuat']; ?>"   size="40" /></td>
    </tr>
    <tr>
		<td class="tdcon">Nơi Sản Xuất</td>
        <td class="tdcon"><input type="text" name="noisanxuatmoi"  value="<?php echo $row['noisanxuat']; ?>"   size="40" /></td>
    </tr>
    <tr>
		<td class="tdcon">Tags Phim</td>
        <td class="tdcon"><input type="text" name="tagsmoi"  value="<?php echo $row['tags']; ?>"   size="40" /></td>
    </tr>
    <tr>
		<td class="tdcon">Link Phim</td>
        <td class="tdcon"><input type="text" name="linkphimmoi"  value="<?php echo $row['linkphim']; ?>"   size="40" /></td>
    </tr>
           <tr>
        	<td class="tdcon">&nbsp;</td>
            <input type="hidden" value="<?php echo $row['id'];?>" name="id" />
        	<td class="tdcon"><input type="submit" value="Sửa Phim" name="submit" />
       			<a href="index.php?thaotac=quanlyphim"><input type="button" value="Quay Lại"/></a>
         	</td>
         </tr>
     </table> 
</form>
</div>
<div class="bar"><a href="index.php?id=quanlyphim"><font color="yellow">Trở Về Trang Quản Lý Phim</font></a></div>
</div>

