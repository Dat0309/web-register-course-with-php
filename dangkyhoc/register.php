 <!DOCTYPE html>

 <html lang="en">

 <head>
     <meta charset="UTF-8">

     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->



     <style type="text/css">
     .input98 {
         font-family: Poppins-Regular;
         font-size: 18px;
         color: #000;
         line-height: 1.2;
         display: block;
         width: 100%;
         height: 25px;
         background: #e1c8c3;
         padding-left: 5px;
         border-color: white;

     }

     .input99 {
         font-family: Poppins-Regular;
         font-size: 20px;
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
         font-family: Poppins-Medium;
         font-size: 16px;
         color: #555555;
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

     .gt {
         width: 100%;
         height: 45px;
         padding-left: 5px;
         padding-top: 10px;
         color: white;
         padding-bottom: 10px;
     }
     </style>
     <title>Đăng ký</title>
     <meta charset="utf-8">
 </head>

 <body>
     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login101">
                 <form class="" action="http://127.0.0.1:444/dangkyhoc/xulydangky.php" method="POST">
                     <span class="">
                         <div align="center"> <span class="">
                                 <a href="">
                                     <img src="img/logo_DLU.png">
                                 </a>
                             </span></div>
                     </span>

                     <span class="login100-form-title p-b-34 p-t-27">
                         Đăng ký
                     </span>
                     <div style="color: black; margin: 2px;">Username:</div>
                     <div class="wrap-input100 validate-input" data-validate="Enter username">
                         <input class="input99" type="text" name="username">

                     </div>
                     <div style="color: black; margin: 2px;">Password:</div>
                     <div class="wrap-input100 validate-input" data-validate="Enter password">
                         <input class="input99" type="password" name="password">

                     </div>
                     <div style="color: black; margin: 2px;">Mã sinh viên:</div>
                     <div class="wrap-input100 validate-input" data-validate="">
                         <input class="input99" type="text" name="masinhvien">

                     </div>
                     <div style="color: black; margin: 2px;">Họ tên:</div>
                     <div class="wrap-input100 validate-input" data-validate="">
                         <input class="input99" type="text" name="hoten">

                     </div>
                     <div style="color: black; margin: 2px;">Ngày sinh:</div>
                     <div class="wrap-input100 validate-input" data-validate="">
                         <input class="input99" type="date" name="ngaysinh">


                     </div>
                     <div style="color: black; margin: 2px;">Giới tính:</div>
                     <div class="gt" data-validate="">
                         <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                         <input type="radio" name="gioitinh" value="Nữ">Nữ

                     </div>
                     <div style="color: black; margin: 2px;">Lớp:</div>
                     <div class="gt" data-validate="">
                         <select class="input98" name="lop">
                             <?php
                           		include_once("publish/connect.php");
	
								$sql="SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa";
								$kq=mysqli_query($conn,$sql);
                                include_once('model/lophoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                         </select>

                     </div>
                     <div style="color: black; margin: 2px;">Quê quán:</div>
                     <div class="wrap-input100 validate-input" data-validate="Enter username">
                         <input class="input99" type="text" name="quequan">
                     </div>

                     <div class="container-login101-form-btn" align="center">

                         <input type="submit" class="login101-form-btn" name="dangky" value="Sign Up">
                     </div>

                     <div class="text-center p-t-90">
                         <p class="" style="color: black">Bạn đã có tài khoản.
                             <a class="" style="color: black" href="http://127.0.0.1:444/dangkyhoc/login.php">
                                 <u>Login?</u>
                             </a>
                         </p>

                     </div>
                 </form>
             </div>
         </div>
     </div>


     <div id="dropDownSelect1"></div>



 </body>

 </html>
 </body>

 </html>