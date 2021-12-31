<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://127.0.0.1:444/dangkyhoc/view/quanlymonhoc.php" >
	<title></title>
</head>
<body>
<?php
	include_once('../publish/connect.php');
	$mamonhoc = $_POST["mamonhoc"];
	$tenmonhoc =$_POST ["tenmonhoc"];
	$giangvien = $_POST["giangvien"];
	$sotinchi = $_POST['sotinchi'];
	$hocphi = $_POST['hocphi'];
	$makhoa=$_POST['makhoa'];
	//$conn=mysqli_connect('localhost','root','','Qlsinhvien') or die('Không kết nối được DB');
	$sql="INSERT INTO monhoc (mamonhoc,tenmonhoc,giangvien,sotinchi,hocphi,makhoa) VALUES('$mamonhoc','$tenmonhoc','$giangvien','$sotinchi','$hocphi','$makhoa')";
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		include_once('../controller/add_monhoc.php');
		
	}
?>
</body>
</html>