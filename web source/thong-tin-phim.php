<?php
require('include/header.php');
?>
<?php 
require_once('config.php'); 
$_get=$_GET['id'];
$array=array(50);
$sql="Select phim.id,phim.tenphim,phim.anhminhhoa,phim.dienvien,phim.thongtinphim,phim.daodien,phim.thoiluongphim,phim.namsanxuat,phim.noisanxuat,phim.tags,phim.linkphim,phim.soluotxem, theloai.theloai from phim,theloai where phim.theloai=theloai.id and phim.id='$_get'";
$result=mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
mysql_query("UPDATE phim SET soluotxem=soluotxem+1 WHERE id='$_get'");
?>
<div id="content">
<div class="block" id="page-info">
<div class="watch">
<br />
<div class="blocktitle breadcrumbs"><div class="item"><span><img src="/doan/giao-dien/images/new.gif" /> Xem Phim : <?php echo $row["tenphim"] ?></span></div> </div>
<div>
<div class="info hreview-aggregate">
<div class="divider"></div>
<div class="poster">
<a href="/doan/xem-phim.php?tenphim=<?php echo $row["tenphim"] ?>">
<img src="/doan/admin/<?php echo $row["anhminhhoa"] ?>"/>
</a>
</div>
<div class="col2">
<h2 class="title fn"><font color="white">Tên Phim : <?php echo $row["tenphim"] ?></font></h2><dl>
<dt><font color="white">Đạo diễn :</dt><dd><?php echo $row["daodien"] ?></font></dd>
<dt><font color="white">Diễn viên :</dt><dd><?php echo $row["dienvien"] ?></font></dd>
<dt><font color="white">Nơi sản xuất :</dt><dd><?php echo $row["noisanxuat"] ?></font></dd>
<dt><font color="white">Năm sản xuất :</dt><dd><?php echo date('d-m-Y',strtotime($row['namsanxuat']));?></font></dd>
<dt><font color="white">Thời lượng :</dt><dd><?php echo $row["thoiluongphim"] ?></font></dd>
<dt><font color="white">Lượt xem :</dt><dd><?php echo $row["soluotxem"] ?> views</font></dd>
<dt><font color="white">Thể loại :</dt><dd><?php echo $row["theloai"] ?></font></dd></font>
<a href="/doan/xem-phim/<?php echo $row["id"] ?>.html#play" title="<?php echo $row["tenphim"] ?>"><img src="/doan/giao-dien/images/xemphim.png" /></a>
</div>
</div>
</div>
<div class="detail">
<div class="blocktitle">
<div class="tabs">
<div class="tab">Thông Tin Chi Tiết Bộ Phim</div>
</div>
</div>
<div class="noidungphim">
<font color="white"><p><?php echo $row["thongtinphim"] ?></p></font></div>
<div class="noidungphim"><span class="label"><font color="white">Tags:</span><h3 class="items"> <?php echo $row["tags"] ?> </h3></font></div>

<?php
include('include/cung-chuyen-muc.php');
?>

</div>
</div>
</div>
</div>
<?php
require('include/footer.php');
?>