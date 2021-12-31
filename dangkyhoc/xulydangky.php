<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// Nếu không phải là sự kiện đăng ký thì không xử lý
    
     
    //Nhúng file kết nối với database
    include('publish/connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    if (isset($_POST["dangky"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  		$masinhvien = $_POST["masinhvien"];
  		$hoten = $_POST["hoten"];
  		$ngaysinh = $_POST["ngaysinh"];
  		$quequan = $_POST["quequan"];
  		$lop = $_POST["lop"];
  		$username = $_POST["username"];
  		$password = $_POST["password"];
      $gioitinh =$_POST['gioitinh'];


         
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$hoten || !$lop)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      
          
    if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM sinhvien WHERE username='$username'")) > 0)
    {
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    	$sql = "INSERT INTO sinhvien (masinhvien,username,password,hoten,ngaysinh,lop,quequan,gioitinh)
    			VALUES ('$masinhvien','$username','$password','$hoten','$ngaysinh','$lop','$quequan','$gioitinh') ";
	    $kq=mysqli_query($conn,$sql);
	if ($kq) 
	{
		echo "Chúc mừng bạn đã đăng ký tài khoản thành công. <a href='http://localhost/dangkyhoc/login.php'>
							Đăng nhập ngay!
						</a>";
	}
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";

                          
    //Thông báo quá trình lưu
  }
?>
</body>
</html>