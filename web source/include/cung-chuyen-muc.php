<div class="block" id="movie-update"><br />
<div class="blocktitle">
<div class="icon movie2"></div>
<h2 class="title">Cùng Chuyên Mục</h2>
<div class="tabs" data-target="#list-movie-update">
</div></div><br /><br />
<div class="blockbody" id="list-movie-update">
<div class="divider"></div>
<ul class="list-film tab phim-chieu-rap">

   
<?php
$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
mysql_select_db("webphim", $connect) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
$_get=$_GET['id'];
$array=array(50);
$sql="Select phim.id,phim.tenphim,phim.anhminhhoa,phim.theloai,phim.thoiluongphim,phim.namsanxuat,phim.soluotxem, theloai.id from phim,theloai where phim.theloai=theloai.id and theloai.id='$_get'";
$result=mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
while($row = mysql_fetch_array($result)){?>
<li>
<div class="inner">
<div>
<a href="/doan/xem-phim.php?id=<?php echo $row["id"] ?>" title="<?php echo $row["tenphim"] ?>">
<img class="khung" src="/doan/admin/<?php echo $row["anhminhhoa"] ?>" alt="<?php echo $row["tenphim"] ?>" />
</a>
</div>
<div class="statustop">
<span><?php echo $row["soluotxem"] ?> views</span>
</div>
<div class="statusbot">
<span class="statusbotleft"><?php echo $row["namsanxuat"] ?></span>
<span class="statusbotright"><?php echo $row["thoiluongphim"] ?></span>
</div>
<div class="name">
<a href="/doan/xem-phim.php?id=<?php echo $row["id"] ?>" title="<?php echo $row["tenphim"] ?>"><?php echo $row["tenphim"] ?></a>
</div>
</div>
</li>

<?php
}
echo '</ul></div></div>';

?>
