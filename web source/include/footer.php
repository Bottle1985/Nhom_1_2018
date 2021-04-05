<style>
    #left_ads_float{ margin-left : 30px; bottom: 50px;left: 0px;position: fixed; }
    #right_ads_float{ bottom: 50px;right: 0px;position: fixed;  }
</style>

<script>

    var vtlai_remove_fads=false;
    function check_adswidth()
        {
    
                var lwidth=parseInt(document.body.clientWidth);
                if(lwidth<1235)
                {
                    document.getElementById('left_ads_float').style.display='none';
                    document.getElementById('right_ads_float').style.display='none';
                }
                else
                {
                    document.getElementById('left_ads_float').style.display='block';
                    document.getElementById('right_ads_float').style.display='block';
                }
                setTimeout('check_adswidth()',10);
    
        }
    
</script>

<!-- START QC SLide start 31/9  -->
<div id="left_ads_float" style="display: block;">
    
              <iframe src="/doan/quang-cao/images/trai.gif" width="160" height="600" frameborder="0" scrolling="no"></iframe>
    
 </div>

<div id="right_ads_float" style="display: block;">
    
            <iframe src="/doan/quang-cao/images/phai.gif" width="160" height="600" frameborder="0" scrolling="no"></iframe>
    
</div>
<!-- END - QC SLide  -->



<script> check_adswidth();</script>





<div id="sidebar">
<div class="thongke">
<div class="block" id="chart">
<div class="blocktitle">        
<div class="tabs" data-target="#topview">                        
<div class="tab">Khách Đăng Nhập</div>
</div>            
</div>
<div class="blockbody" id="topview">
<ul class="tab topviewday "> 
     <br />
     <form action="dang-nhap.php" method="post">    
     <font color="white">Username: <input type="text" name="username"></font><br /><br />
     <font color="white">Password: <input type="password" name="password"></font><br /><br />
     <div align="center">
     <input type="submit" name="submit" value=" Đăng Nhập ">
     <input type="reset" name="reset" value=" Hủy Bỏ ">
     </div>
     </form>
 </ul>
</div>
</div>
</div>
    
     



<div class="thongke">
<div class="block" id="chart">
<div class="blocktitle">        
<div class="tabs" data-target="#topview">                        
<div class="tab">Thể Loại Phim Truyện</div>
</div>            
</div>
<div class="blockbody" id="topview">
<ul class="tab topviewday ">   
<?php
$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
mysql_select_db("webphim", $connect) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("select * from theloai");
while($row = mysql_fetch_array($result))
{
    ?>
     <li><span class="st top">TL</span>
             <div class="detail">
             <div class="name">
             <a href="/doan/the-loai/<?php echo $row["id"] ?>.html"><?php echo $row["theloai"] ?></a></div>      
                               
             <div class="views"><a href="/doan/the-loai/<?php echo $row["id"] ?>.html"><font color="white">Click Xem Chi Tiết</font></a></div></div>
                <?php
}
    ?>
</li>
</ul>
</div>
</div>
</div>



<div class="thongke">
<div class="block" id="chart">
<div class="blocktitle">        
<div class="tabs" data-target="#topview">                        
<div class="tab">Thống Kê WebSite</div>
</div>            
</div>
<div class="blockbody" id="topview">
<ul class="tab topviewday "><br />
<?php 
$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
mysql_select_db("webphim", $connect) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
$q = "select count(*) from admin";
$r = mysql_db_query("webphim",$q);
$sotv = mysql_fetch_array($r);
$q1 = "select count(*) from phim";
$r1 = mysql_db_query("webphim",$q1);
$sophim = mysql_fetch_array($r1);
$tg = time();
$tgmoi = $tg-60;
$truyvan = "delete from online where time < {$tgmoi}";
$result = mysql_db_query("webphim",$truyvan);
echo "<li><font color='white'><b>Số Bộ Phim : {$sophim[0]}</b></li>";
echo "<li><font color='white'><b>Số Thành Viên: {$sotv[0]}</b></li>";
echo "</ul></div></div></div>";
?>





<div class="quangcao">
<img src="/doan/quang-cao/event-free-ship.png" width="298px" />
</div></div></div>
<div id="footer">
<div id="fb-root"></div>
<div class="container info">
<div class="text"><b>
Copyright © 2015 by Đồ Án 4 Nhóm 1 - All Rights Reserved.<br />
Sinh viên thực hiện : Nguyễn Văn Hiệu - Đào Tuấn Anh</b>
</div>
</div>
</div>
</body>    
</html>
