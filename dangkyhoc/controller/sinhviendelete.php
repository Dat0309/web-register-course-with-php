
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/sinhvien_view.php" >
  <title>Xóa</title>
</head>
<body>
  <?php
  
  include_once("../publish/connect.php");
  $masinhvien=$_GET['masinhvien'];
  $sql="DELETE FROM dsdangky WHERE masinhvien = '$masinhvien'";
  $kq=mysqli_query($conn,$sql);
 $sql="DELETE FROM sinhvien WHERE masinhvien = '$masinhvien'";
 $result=mysqli_query($conn,$sql);
  if ($result) {
    header("http://localhost/dangkyhoc/view/sinhvien_view.php");
  }
  
  ?>
</body>
</html>