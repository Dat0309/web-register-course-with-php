<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->



    <style type="text/css">
    .limiter {
        width: 100%;
        margin: 0 auto;
    }

    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        position: relative;
        top: 0px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;

    }

    .container-login100::before {
        width: 100%;
        height: 100%;
        top: 100px;
        left: 0;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .input99 {
        font-family: Poppins-Regular;
        font-size: 16px;
        color: #000;
        line-height: 1.2;
        display: block;
        width: 100%;
        height: 45px;
        background: transparent;
        padding-left: 5px;
    }

    .wrap-login101 {
        width: 500px;
        border-radius: 10px;
        overflow: hidden;
        padding: 55px 55px 37px 55px;
        background: #9152f8;
        background: -webkit-linear-gradient(top, #A1D5BC, rgba(63, 141, 45, 0.72));
    }

    .login101-form-btn {
        font-family: arial;
        font-size: 16px;
        color: white;
        line-height: 1.2;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 120px;
        height: 50px;
        border-radius: 25px;
        background: #9152f8;
        background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .15), #f8f9fa);
        background: -o-linear-gradient(bottom, #7579ff, #b224ef);
        background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
        background: linear-gradient(bottom, #7579ff, #b224ef);
        position: relative;
        z-index: 1;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        text-align: center;
    }
    </style>
    <title>Trang đăng nhập</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
        //Khai báo sử dụng session
        session_start();
 
        //Khai báo utf-8 để hiển thị được tiếng việt
        header('Content-Type: text/html; charset=UTF-8');
 
        //Xử lý đăng nhập
        if (isset($_POST['dangnhap'])) 
        {
            //Kết nối tới database
            include('publish/connect.php');
     
            //Lấy dữ liệu nhập vào
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);

    
            //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
            if (!$username || !$password) {
                echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
     
            //Kiểm tra tên đăng nhập có tồn tại không
            $sql="SELECT username, password FROM sinhvien WHERE username='$username'";
            $kq=mysqli_query($conn,$sql);
            if (mysqli_num_rows($kq) == 0) {
                echo "Tên đăng nhập không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
            }
            else {
                $row = mysqli_fetch_array($kq);
     
                //So sánh 2 mật khẩu có trùng khớp hay không
                if ($password != $row['password']) {
                echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
                }

            
            }
            //Lấy mật khẩu trong database ra
    
     
            //Lưu tên đăng nhập trên session
            $_SESSION['username'] = $username;
    
            include_once('trangchu.php');
    
            die();
        }
?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login101">
                <form class="" action="login.php" method="POST">
                    <span class="">
                        <div align="center"> <span class="">
                                <a href="">
                                    <img src="img/logo_DLU.png">
                                </a>
                            </span></div>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Đăng nhập
                    </span>
                    <div style="color: black; margin: 2px;">Tài khoản:</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">

                        <input class="input99" type="text" name="username" placeholder="">
                        <span class="" data-placeholder="&#xf207;"></span>
                    </div>
                    <div style="color: black; margin: 2px;">Mật khẩu:</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input99" type="password" name="password" placeholder="">
                        <span class="" data-placeholder="&#xf191;"></span>
                    </div>
                    <div style="padding-bottom: 50px; text-align: right;">
                        <p class="" style="color: black">Đăng nhập với quyền.
                            <a class="" style="color: gray" href="http://127.0.0.1:444/dangkyhoc/admin.php">
                                <u>Admin</u>
                            </a>
                        </p>

                    </div>


                    <div class="container-login100-form-btn" align="center">

                        <input type="submit" class="login101-form-btn" name="dangnhap" value="Login">
                    </div>

                    <div class="text-center p-t-90">
                        <p class="" style="color: black">Bạn chưa có tài khoản.
                            <a class="" style="color: gray" href="http://127.0.0.1:444/dangkyhoc/register.php">
                                <u>Sign up?</u>
                            </a>
                        </p>

                    </div>

                </form>
            </div>
        </div>
    </div>




</body>

</html>
</body>

</html>