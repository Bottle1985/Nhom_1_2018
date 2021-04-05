<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:center.php');
include "conn.inc.php";
?>
<div class="bar">Quản Lý Thể Loại Phim</div>
<div style="background: white;">
<table class="table" width="100%">
                    <tr><td colspan="10"><br />
                    <form>
                    	<a href="index.php?thaotac=themtheloai"><input type="button" value="Thêm Thể Lọai Phim"/></a>
                    </form><br />
                    </td></tr>
					<tr>
                         <td class="td"><center>Tên Danh Mục</center></td>
                        <td class="td"><center>Thao Tác</center></div></td>
                    </tr>
                    <?php	
                    	$sql="select * from theloai";
						$result=mysql_query($sql) or die(mysql_error());
						while($row=mysql_fetch_array($result))
					{
					?>
								<tr>
                           			<td class="tdcon"><center><?php echo $row['theloai']; ?></center></td>
                                    <td class="tdcon"><center>
					 				<a href="index.php?loaiphim=<?php echo $row['theloai'];?>&thaotac=suatheloai">Sửa</a> | 
                                    <a href="xoatheloai.php?theloai=<?php echo $row['theloai'];?>" onClick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>	
                        </center>
                            		</td>
                                </tr>
                      <?php } ?>
					  </table>
                      <div class="bar">
                      <a href="index.php"><font color="yellow">Trở Về Trang Chủ</font></a></div>
                      </div>
                      </div>
