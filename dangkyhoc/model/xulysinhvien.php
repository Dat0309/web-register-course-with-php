<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://127.0.0.1:444/dangkyhoc/view/profile.php" >
	<title></title>
</head>
<body>
<?php
	$masinhvien = $_POST["masinhvien"];
	$hoten =$_POST ["hoten"];
	$lop = $_POST["lop"];
	$ngaysinh = $_POST['ngaysinh'];
	$quequan = $_POST['quequan'];
	$gioitinh = $_POST['gioitinh'];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	
	 include_once('../publish/connect.php');
	$sql="UPDATE sinhvien SET hoten='$hoten', avatar='../model/$target_file'  ,lop ='$lop', ngaysinh='$ngaysinh', gioitinh ='$gioitinh',quequan='$quequan' Where masinhvien='$masinhvien'";
	
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://127.0.0.1:444/dangkyhoc/view/profile.php");
	
	}
	?>
</body>
</html>



