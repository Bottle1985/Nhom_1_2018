<body>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION)) 
header('location:index.php');
include "conn.inc.php";
$get=$_POST['id'];
$get2=$_POST['tenphimmoi'];
	$anhminhhoa=$_POST['anhminhhoamoi'];
	
	  $allowedExts = array("jpg", "jpeg", "gif", "png"); // mang chua cac loai file co the duoc upload
   $anhminhhoa= "upload/images/".$_FILES["anhminhhoamoi"]["name"]; // lay ten file
   if($anhminhhoa !=""){       //neu co hinh anh
	 $m=explode(".", $anhminhhoa); 
     $extension=$m[sizeof($m)-1]; // tach phan duoi mo rong cua hinh anh
	
	 if ((($_FILES["anhminhhoamoi"]["type"] == "image/gif")
	    || ($_FILES["anhminhhoamoi"]["type"] == "image/jpeg")
	    || ($_FILES["anhminhhoamoi"]["type"] == "image/png")
	    || ($_FILES["anhminhhoamoi"]["type"] == "image/jpg"))
	    && in_array($extension, $allowedExts)) // kiem tra loai hinh anh va duoi mo rong duoc cho phep upload
  	 {
  		if ($_FILES["anhminhhoamoi"]["error"] > 0) //neu hinh bi loi
    	{
    		echo "Return Code: " . $_FILES["anhminhhoamoi"]["error"] . "<br />";
    	}
  		else if (file_exists("upload/images/" . $_FILES["anhminhhoamoi"]["name"])) //neu hinh anh da duoc upload
      	{
      		echo $_FILES["anhminhhoamoi"]["name"] . " da ton tai. ";
			die();
      	}
		else
		{
			move_uploaded_file($_FILES["anhminhhoamoi"]["tmp_name"],"upload/images/" . $_FILES["anhminhhoamoi"]["name"]); // copy hinh anh den thu muc chua web
		}
  	}
	}
$dienvien=$_POST['dienvienmoi'];
$thongtinphim=$_POST['thongtinphimmoi'];
$theloai=$_POST['theloaimoi'];
$daodien=$_POST['daodienmoi'];	
$thoiluongphim=$_POST['thoiluongphimmoi'];
$namsanxuat=$_POST['namsanxuatmoi'];
$noisanxuat=$_POST['noisanxuatmoi'];
$tags=$_POST['tagsmoi'];
$linkphim=$_POST['linkphimmoi'];
	
	 
	
	 $sql_edit="update phim set tenphim='".$get2."',anhminhhoa='".$anhminhhoa."', dienvien='".$dienvien."', thongtinphim='".$thongtinphim."', theloai = '" . $theloai . "', daodien='".$daodien . "', thoiluongphim='".$thoiluongphim."', namsanxuat='".$namsanxuat."', noisanxuat='".$noisanxuat."', tags='".$tags."', linkphim='".$linkphim."' where id = '" . $get . "'";
	mysql_query($sql_edit) or die("Lỗi Cơ Sở Dữ Liệu !!!");
	echo "<script>alert('Sửa thành công')</script>";
	header("Location: index.php?thaotac=quanlyphim");
?>

