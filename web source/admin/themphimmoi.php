<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
$tenphim=$_POST['tenphim'];


   $allowedExts = array("jpg", "jpeg", "gif", "png"); // mang chua cac loai file co the duoc upload
   $anhminhhoa= "upload/images/".$_FILES["anhminhhoa"]["name"]; // lay ten file
   if($anhminhhoa !=""){       //neu co hinh anh
	 $m=explode(".", $anhminhhoa); 
     $extension=$m[sizeof($m)-1]; // tach phan duoi mo rong cua hinh anh
	
	 if ((($_FILES["anhminhhoa"]["type"] == "image/gif")
	    || ($_FILES["anhminhhoa"]["type"] == "image/jpeg")
	    || ($_FILES["anhminhhoa"]["type"] == "image/png")
	    || ($_FILES["anhminhhoa"]["type"] == "image/jpg"))
	    && in_array($extension, $allowedExts)) // kiem tra loai hinh anh va duoi mo rong duoc cho phep upload
  	 {
  		if ($_FILES["anhminhhoa"]["error"] > 0) //neu hinh bi loi
    	{
    		echo "Return Code: " . $_FILES["anhminhhoa"]["error"] . "<br />";
    	}
  		else if (file_exists("upload/images/" . $_FILES["anhminhhoa"]["name"])) //neu hinh anh da duoc upload
      	{
      		echo $_FILES["anhminhhoa"]["name"] . " da ton tai. ";
			die();
      	}
		else
		{
			move_uploaded_file($_FILES["anhminhhoa"]["tmp_name"],"upload/images/" . $_FILES["anhminhhoa"]["name"]); // copy hinh anh den thu muc chua web
		}
  	}
	}


$dienvien=$_POST['dienvien'];
$thongtinphim=$_POST['thongtinphim'];
$theloai=$_POST['theloai'];
$daodien=$_POST['daodien'];
$thoiluongphim=$_POST['thoiluongphim'];
$namsanxuat=$_POST['namsanxuat'];
$noisanxuat=$_POST['noisanxuat'];
$tags=$_POST['tags'];
$linkphim=$_POST['linkphim'];
  

$sql="insert into phim(tenphim,anhminhhoa,dienvien,thongtinphim,theloai,daodien,thoiluongphim,namsanxuat,noisanxuat,tags,linkphim) value('".$tenphim."','".$anhminhhoa."','".$dienvien."','".$thongtinphim."','".$theloai."','".$daodien."','".$thoiluongphim."','".$namsanxuat."','".$noisanxuat."','".$tags."','".$linkphim."')";
mysql_query($sql) or die('Lỗi cơ sở dữ liệu');
?>

<script type="text/javascript">
alert ("Thêm thành công");
window.location = "index.php?id=quanlyphim";
</script>
