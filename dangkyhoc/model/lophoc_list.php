
<?php
	include_once("../publish/connect.php");
	
	$sql="SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc"."."."makhoa = khoa".".makhoa";
	$kq=mysqli_query($conn,$sql);
?>