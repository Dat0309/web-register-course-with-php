<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://127.0.0.1:444/dangkyhoc/view/monhoc_view.php" >
	<title></title>
</head>
<body>
<?php
	$mamonhoc=$_POST['mamonhoc'];
	$tenmonhoc = $_POST['tenmonhoc'];
	$giangvien = $_POST['giangvien'];
	$sotinchi = $_POST['sotinchi'];
	$hocphi = $_POST['hocphi'];

	include_once("../publish/connect.php");
	$sql="UPDATE monhoc SET tenmonhoc='$tenmonhoc'  ,giangvien ='$giangvien', hocphi='$hocphi' Where mamonhoc='$mamonhoc'";
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://127.0.0.1:444/dangkyhoc/view/monhoc_view.php");
	
	}
	?>
</body>
</html>