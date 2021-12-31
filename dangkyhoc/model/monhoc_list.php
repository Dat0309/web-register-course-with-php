
<?php
	include_once("../publish/connect.php");
	
	$sql="SELECT * FROM monhoc INNER JOIN khoa ON monhoc"."."."makhoa = khoa".".makhoa";
	$kq=mysqli_query($conn,$sql);
?>