<?php 
if (session_id() == '' || !isset($_SESSION)) {
  session_start();}
  while ($row=mysqli_fetch_array($kq)) {

        $sql = "INSERT INTO dsdangky (masinhvien,dstenmonhoc,dsgiangvien,dssotinchi,dshocphi)
    VALUES ('echo'['masinhvien']'','echo'['tenmonhoc']'','echo'['giangvien']'','echo'['sotinchi']'','echo'['hocphi']'')";
      $kq=mysqli_query($conn,$sql);include_once("../publish/connect.php");}
 ?>