<?php require_once('config.php'); ?>
<?php
echo '<div class="block" id="movie-update"><br />
<div class="blocktitle">
<div class="icon movie2"></div>
<h2 class="title">Phim Mới Cập Nhật</h2>
<div class="tabs" data-target="#list-movie-update">
</div>
</div><br /><br />
<div class="blockbody" id="list-movie-update">
<div class="divider"></div>
<ul class="list-film tab phim-chieu-rap">';

$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
mysql_select_db("webphim", $connect) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
 //đoạn lệnh để phân trang
$baitrenmottrang = 12;
//lấy biến trang
if(empty($_REQUEST['page']))
$page = 0 ;
else
$page = $_REQUEST['page'];
//Lấy tổng số hàng để chia số bài trên 1 trang sẽ ra số trang	
$sodulieu = mysql_num_rows(mysql_query("select * from phim", $connect) ) or die(mysql_error());
$sotrang = $sodulieu/$baitrenmottrang;
$sql="select * from phim limit ".$page*$baitrenmottrang." , ". $baitrenmottrang;
$result=mysql_query($sql) or die(mysql_error());
while($row=mysql_fetch_array($result))
{?>
<li>
<div class="inner">
<div>
<a href="/doan/thong-tin-phim/<?php echo $row["id"] ?>.html" title="<?php echo $row["tenphim"] ?>">
<img class="khung" src="/doan/admin/<?php echo $row["anhminhhoa"] ?>" alt="<?php echo $row["tenphim"] ?>" />
</a>
</div>
<div class="statustop">
<span><?php echo $row["soluotxem"] ?> views</span>
</div>
<div class="statusbot">
<span class="statusbotleft"><?php echo date('d-m-Y',strtotime($row['namsanxuat']));?></span>
<span class="statusbotright"><?php echo $row["thoiluongphim"] ?></span>
</div>
<div class="name">
<a href="/doan/thong-tin-phim/<?php echo $row["id"] ?>.html" title="<?php echo $row["tenphim"] ?>"><?php echo $row["tenphim"] ?></a>
</div>
</div>
</li>

<?php
}
echo '</ul></div><div class="table"><div class="trang">';
			echo "Trang : ";
			for ( $page = 0; $page <= $sotrang; $page ++ )
			{
				echo " <span class='trang'><a href='index.php?page=$page'>". ($page+1) ."</a></span> ";
			}
echo'</div></div></div>';
?>