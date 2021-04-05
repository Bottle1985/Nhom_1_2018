<?php
require('include/header.php');
?>
<?php 
require_once('config.php'); 
$_get=$_GET['id'];
$array=array(50);
$sql="Select * from phim where id='$_get'";
$result=mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
mysql_query("UPDATE phim SET soluotxem=soluotxem+1 WHERE id='$_get'");
?>
<div id="content">
<div class="block" id="page-info">
<div class="xemphim" id="play" style="text-align:center;">Bạn đang xem phim <font color="red"><?php echo $row["tenphim"] ?></font> online trên website
<font color="red">Đồ Án 4 - Nhóm 1</font>. Chúc bạn có những phút giây giải trí vui vẻ !</div>
<div class="play">
<video controls width="676px" height="500px" type="video/mp4">
<source src="<?php echo $row['linkphim']?>">
</video>
</div>
<div class="cungchuyenmuc">PHIM CÙNG CHUYÊN MỤC</div>
</div>
</div>

   
<?php
require('include/footer.php');
?>