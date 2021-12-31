<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5 url=http://127.0.0.1:444/dangkyhoc/view/quanlysinhvien.php">
    <title>Update sinh viên</title>
</head>

<body>
    <?php
	$masinhvien = $_POST["masinhvien"];
	$hoten =$_POST ["hoten"];
	$lop = $_POST["lop"];
	$ngaysinh = $_POST['ngaysinh'];
	$quequan = $_POST['quequan'];
	$gioitinh = $_POST['gioitinh'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	 include_once('../publish/connect.php');

	$sql="UPDATE sinhvien SET username='$username',password='$password',   hoten='$hoten'  ,lop ='$lop', ngaysinh='$ngaysinh', gioitinh ='$gioitinh',quequan='$quequan' Where masinhvien='$masinhvien'";
	
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://127.0.0.1:444/dangkyhoc/view/quanlysinhvien.php");
	
	}
	?>

</body>

</html>