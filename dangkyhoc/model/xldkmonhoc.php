<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title></title>
</head>
<body>
<?php 
if (session_id() == '' || !isset($_SESSION)) {
  session_start();}
$mamonhoc=$_GET['mamonhoc'];
$username = $_SESSION['username'] ;
include_once("../publish/connect.php");


  $sql="SELECT  *
   FROM sinhvien INNER JOIN lophoc
        on sinhvien.lop=lophoc.lop
        inner join khoa
        on lophoc.makhoa=khoa.makhoa
        inner join monhoc
        on khoa.makhoa = monhoc.makhoa
        Where mamonhoc='$mamonhoc' AND username='$username'";
  $kq=mysqli_query($conn,$sql);

      while ($row=mysqli_fetch_array($kq)) {
      	$mamonhoc = $row['mamonhoc'];
        $masinhvien = $row['masinhvien'];
        $dstenmonhoc = $row['tenmonhoc'];
        $dsgiangvien = $row['tenmonhoc'];
        $dssotinchi = $row['sotinchi'];
        $dshocphi = $row['hocphi'];
$sql = "INSERT INTO `dsdangky` (`mamonhoc`,`masinhvien`, `dstenmonhoc`, `dsgiangvien`, `dssotinchi`, `dshocphi`) 
 VALUES ('".$row['mamonhoc']."','".$row['masinhvien']."', '".$row['tenmonhoc']."', '".$row['giangvien']."', '".$row['sotinchi']."', '".$row['hocphi']."')";
     	$query=mysqli_query($conn,$sql);
     	
$sql = "SELECT SUM(dssotinchi) FROM dsdangky Where masinhvien='$masinhvien'";
    $result=mysqli_query($conn,$sql);
     while ($row=mysqli_fetch_array($result)) {

    $row['SUM(dssotinchi)'];
    if ($row['SUM(dssotinchi)']>15) {
      echo "Bạn không thể đăng ký quá 15 tín chỉ. <a href='../Controller/delete_dsdangky2.php?mamonhoc=".$mamonhoc."'>Đăng ký lại";
    }
    else {
      echo "Đăng kí thành công. <a href='http://127.0.0.1:444/dangkyhoc/view/dangky.php'>Tiếp tục</a>";
    }
  }
}
  
        ?>
</body>
</html>


