<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/dangky.php" >
	<title></title>
</head>
<body>
	<?php 
	include_once("../publish/connect.php");
	$mamonhoc=$_GET['mamonhoc'];
	$sql="DELETE FROM dsdangky WHERE mamonhoc = '$mamonhoc'";
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://localhost/dangkyhoc/view/dangky.php");
	}
	 ?>
</body>
</html>