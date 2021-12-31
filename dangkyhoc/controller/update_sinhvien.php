 <?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
 <!DOCTYPE html>

 <html lang="en">

 <head>
     <meta charset="UTF-8">

     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="../css/util.css">
     <link rel="stylesheet" type="text/css" href="../css/main.css">
     <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->



     <style type="text/css">
     .input98 {
         font-family: Poppins-Regular;
         font-size: 18px;
         color: #fff;
         line-height: 1.2;
         display: block;
         width: 100%;
         height: 25px;
         background: #e1c8c3;
         padding-left: 5px;
         border-color: white;

     }

     .button {
         -moz-box-shadow: inset 0px 1px 0px 0px #ffffff;
         -webkit-box-shadow: inset 0px 1px 0px 0px #ffffff;
         box-shadow: inset 0px 1px 0px 0px #ffffff;
         background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
         background: -moz-linear-gradient(center top, #ededed 5%, #dfdfdf 100%);
         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
         background-color: #ededed;
         -webkit-border-top-left-radius: 6px;
         -moz-border-radius-topleft: 6px;
         border-top-left-radius: 6px;
         -webkit-border-top-right-radius: 6px;
         -moz-border-radius-topright: 6px;
         border-top-right-radius: 6px;
         -webkit-border-bottom-right-radius: 6px;
         -moz-border-radius-bottomright: 6px;
         border-bottom-right-radius: 6px;
         -webkit-border-bottom-left-radius: 6px;
         -moz-border-radius-bottomleft: 6px;
         border-bottom-left-radius: 6px;
         text-indent: 0;
         border: 1px solid #dcdcdc;
         display: inline-block;
         color: #777777;
         font-family: Times New Roman;
         font-size: 15px;
         font-weight: normal;
         font-style: normal;
         height: 25px;
         line-height: 25px;
         width: 100px;
         text-decoration: none;
         text-align: center;
         text-shadow: 1px 1px 0px #ffffff;
         color: black;
     }

     .button:hover {
         background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
         background: -moz-linear-gradient(center top, #dfdfdf 5%, #ededed 100%);
         filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
         background-color: #dfdfdf;
     }

     .button:active {
         position: relative;
         top: 1px;
     }

     .input99 {
         font-family: arial;
         font-size: 16px;
         color: #fff;
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
         background: -webkit-linear-gradient(top, #f6832d, rgba(255, 87, 34, 0.72));
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
         padding: 0 px;
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
     <title>Chỉnh sửa thông tin</title>
     <meta charset="utf-8">
 </head>

 <body>
     <?php

  $masinhvien=$_GET['masinhvien'];
  include_once('../publish/connect.php');


  $sql="SELECT * From sinhvien Where masinhvien='$masinhvien'";
  $kq=mysqli_query($conn,$sql);
  
  $ar=mysqli_fetch_array($kq,);

?>

     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login101">
                 <form class="" action="../model/xulysinhvien.php" method="POST" enctype="multipart/form-data">
                     <span class="">
                         <div align="center" style="margin: 40px"> <span class="">
                                 <a href="">
                                     <?php
                  include('../publish/connect.php');
           
          //Lấy dữ liệu nhập vào
          $username = $_SESSION['username'] ;

          $sql="SELECT * FROM sinhvien WHERE username='$username'";
          $kq=mysqli_query($conn,$sql);
          if (mysqli_num_rows($kq) > 0) {
            {while ($row= mysqli_fetch_assoc($kq)) {
                  # code...
                  echo "<img height='150px' width='150px' style='border-radius: 50%;'' src='".$row['avatar']."'>";

                  
                }
                }
          }
                    ?>
                                 </a>
                             </span></div>

                         <div></div>

                         <div>
                             <input class="input99" type="hidden" name="username">

                         </div>

                         <div>
                             <input class="input99" type="hidden" name="password">

                         </div>

                         <div>
                             <input class="input99" type="hidden" name="masinhvien" value="<?php echo $masinhvien ?>">

                         </div>
                         <div style="color: white; margin: 2px;">Avatar:</div>
                         <div class="wrap-input100 validate-input">
                             <input class="input99" type="file" name="fileToUpload" value="">
                         </div>
                         <div style="color: white; margin: 2px;">Họ tên:</div>
                         <div class="wrap-input100 validate-input">
                             <input class="input99" type="text" name="hoten" value="<?php echo $ar['hoten'] ?>">

                         </div>
                         <div style="color: white; margin: 2px;">Ngày sinh:</div>
                         <div class="wrap-input100 validate-input">
                             <input class="input99" type="date" name="ngaysinh" value="<?php echo $ar['ngaysinh'] ?>">

                         </div>
                         <div style="color: white; margin: 2px;">Giới Tính:</div>
                         <div class="wrap-input100 validate-input">
                             <div class="gt" data-validate="">
                                 <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                                 <input type="radio" name="gioitinh" value="Nữ">Nữ

                             </div>

                         </div>
                         <div style="color: white; margin: 2px;">Lớp:</div>
                         <div class="wrap-input100 validate-input">
                             <select class='input98' name='lop'>
                                 <?php
                           include_once('../publish/connect.php');
  
             $sql='SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa';
             $kq=mysqli_query($conn,$sql);
                                include_once('model/lophoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                             </select>

                         </div>
                         <div style="color: white; margin: 2px;">Quê quán:</div>
                         <div class="wrap-input100 validate-input">
                             <input class="input99" type="text" name="quequan" value="<?php echo $ar['quequan'] ?>">
                         </div>

                         <div class="container-login101-form-btn" align="center">

                             <input type="submit" class="button" name="update" value="Thay đổi">
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