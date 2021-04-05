<?php
require_once('include/header.php'); 
require_once('config.php'); 
if(isset($_GET['tukhoa'])){
    $result = mysql_query("select count(*) from phim where tenphim like '%{$_GET['tukhoa']}%' or dienvien like '%{$_GET['tukhoa']}%' or daodien like '%{$_GET['tukhoa']}%'", $connect);
}
else {
    $result = mysql_query('select count(*) from phim', $connect);
}
while($row=mysql_fetch_array($result))
{?>
<div class="mainside">
<div id="content">
<div class="block" id="movie-recommend"> <br />
<div class="blocktitle">
<div class="icon movie2"></div>
<h2 class="title">Tìm Kiếm: Tên Phim, Diễn Viên, Đạo Diễn</h2>
<div class="divider"></div>
<div class="blockbody" id="list_movie">
<div class="list_movie">
<div class="widget_search">
<form method="GET" id="form-search" action="/doan/tim-kiem.php">
<div><input type="text" name="tukhoa" placeholder="Tìm Kiếm Theo : Tên Phim, Đạo Diễn, Diễn Viên" value="">
<input name="" id="searchsubmit" class="" value=" " type="submit"></div></form>
</div></div></div></div></div></div>

<div class="block" id="movie-update"><br />
<div class="blocktitle">
<div class="icon movie2"></div>
<h2 class="title">Kết Quả Tìm Kiếm Từ Khóa: <?php echo $_GET['tukhoa'] ?></h2>
<div class="tabs" data-target="#list-movie-update">
</div>
</div><br /><br />
<div class="blockbody" id="list-movie-update">
<div class="divider"></div>
<ul class="list-film tab phim-chieu-rap">
<?php
}


if(isset($_GET['tukhoa'])){
$sql="select * from phim where tenphim like '%{$_GET['tukhoa']}%' or dienvien like '%{$_GET['tukhoa']}%' or daodien like '%{$_GET['tukhoa']}%'";
$result = mysql_query($sql) or die("Lỗi Cơ Sở Dữ Liệu!!!");
}
else {
$sql = "select * from phim where tenphim";
$result = mysql_query($sql) or die("Lỗi Cơ Sở Dữ Liệu!!!");
}
while($row = mysql_fetch_array($result))
{?>
<li>
<div class='inner'>
<div>
<a href='/doan/thong-tin-phim/<?php echo $row['id'] ?>.html' title='<?php echo $row['tenphim'] ?>'>
<img class='khung' src='/doan/admin/<?php echo $row['anhminhhoa'] ?>' alt='<?php echo $row['tenphim'] ?>' />
</a>
</div>
<div class='statustop'>
<span><?php echo $row['soluotxem'] ?> views</span>
</div>
<div class='statusbot'>
<span class='statusbotleft'><?php echo date('d-m-Y',strtotime($row['namsanxuat']));?></span>
<span class='statusbotright'><?php echo $row['thoiluongphim'] ?></span>
</div>
<div class='name'>
<a href='/doan/thong-tin-phim/<?php echo $row['id'] ?>.html' title='<?php echo $row['tenphim'] ?>'><?php echo $row['tenphim'] ?></a>
</div>
</div>
</li>

<?php
}

echo '</ul></div></div>';

require_once('include/footer.php'); 
?>

