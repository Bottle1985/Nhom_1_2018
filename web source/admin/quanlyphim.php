
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
?>
<div style="background: white;">
<div class="bar"><img src="/doan/giao-dien/images/new.gif" /> <a href="index.php?thaotac=themphim"><font color="yellow">Thêm Phim Mới Lên WebSite</font></a> <img src="/doan/giao-dien/images/new.gif" /></div>
                  
                    <table class="table" >
					<tr align="center">
                    <td class="td">Tên Phim</td>
                    <td class="td">Đạo Diễn</td>
                    <td class="td">Diễn Viên</td>
                    <td class="td">Năm Sản Xuất</td>
                    <td class="td">Nơi Sản Xuất</td>
                    <td class="td">Thể Loại</td>
                    <td class="td">Thời Lượng</td>
                    <td class="td">Tags Phim</td>
                    <td class="td">Link Phim</td>
      				<td class="td">Hình Ảnh </td>
                    <td class="td">Mô Tả</td>
                    <td class="td">Thao Tác</td>   
                    </tr>
					<?php
						//đoạn lệnh để phân trang
			$baitren_mottrang = 10;
			//lấy biến trang
			if(empty($_REQUEST['page']))
			$page = 0 ;
			else
			$page = $_REQUEST['page'];
			//Lấy tổng số hàng để chia số bài trên 1 trang sẽ ra số trang	
			$sodu_lieu = mysql_num_rows(mysql_query("select * from phim") ) or die(mysql_error());
			$sotrang = $sodu_lieu/$baitren_mottrang;
			$sql="select * from phim limit ".$page*$baitren_mottrang." , ". $baitren_mottrang;
			$result=mysql_query($sql) or die(mysql_error());
			while($row=mysql_fetch_array($result))
					{
					?>
                    		
                     <tr align="center">
                     <td class="tdcon"><?php echo $row['tenphim']; ?></td>
                     <td class="tdcon"><?php echo $row['daodien']; ?></td>
                     <td class="tdcon"><?php echo $row['dienvien']; ?></td>
                     <td class="tdcon"><?php echo date('d-m-Y',strtotime($row['namsanxuat']));?></td>
                     <td class="tdcon"><?php echo $row['noisanxuat']; ?></td>
                     <td class="tdcon"><?php echo $row['theloai']; ?></td>
                     <td class="tdcon"><?php echo $row['thoiluongphim']; ?></td>
                     <td class="tdcon"><?php echo $row['tags']; ?></td>
                     <td class="tdcon"><?php echo substr($row['linkphim'],0,30); ?>...</td>
                     <td class="tdcon"><img src="<?php echo $row['anhminhhoa']; ?>" height="150" width="150"/></td>
                     <td class="tdcon"><?php echo substr($row['thongtinphim'],0,400); ?>...</td>
                     <td class="tdcon"><div align="center">
                     <a href="/doan/thong-tin-phim/<?php echo $row['id'];?>.html">Xem</a><br /><br />
   					 <a href="index.php?thaotac=suaphim&id=<?php echo $row['id'];?>">Sửa</a><br /><br />
                     <a href="xoaphim.php?id=<?php echo $row['id'];?>" onClick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>	
                        	</div></td>
                            </tr>
                    <?php } ?>
                    </table>
                    <div class="table"><div class="trang">
                    <?php
						echo "Trang : ";
			for ( $page = 0; $page <= $sotrang; $page ++ )
			{
				echo " <span class='trang'><a href='index.php?page=$page&thaotac=quanlyphim'>". ($page+1) ."</a></span> ";
			}
					?>
                    </div>
                    </div>                   
                    </div>
                    </div>