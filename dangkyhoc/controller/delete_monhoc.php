
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/quanlymonhoc.php" >
	<title>Xóa</title>
</head>
<body>
	<?php
	
	include_once("../publish/connect.php");
	$mamonhoc=$_GET['mamonhoc'];
	$sql="DELETE FROM monhoc WHERE mamonhoc = '$mamonhoc'";
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://localhost/dangkyhoc/view/quanlymonhoc.php");
	}
	?>
</body>
</html>