<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Thông tin sinh viên</title>
    <style type="text/css">
    .container-login101 {
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
        padding: 4px;

        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        top: 20px;


    }

    .container-login101::before {
        content: "";
        display: block;
        position: absolute;

        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: -webkit-linear-gradient(top, #114912, rgba(63, 141, 45, 0.72));
    }

    .wrap-login101 {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        padding: 55px 55px 55px 55px;
        background: #9152f8;
        background: -webkit-linear-gradient(top, #A1D5BC, rgba(0, 0, 0, .15));
        position: relative;
        top: 30px;
    }

    td {
        color: black;
        font-size: 24px;
    }

    .a1 {
        width: 50%;
        position: relative;
        left: -45px;
        padding: 20px;
    }

    .a2 {
        width: 50%;
        position: relative;
        right: -35px;
        padding: 20px;

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
    </style>

</head>

<body>
    <div>
        <style type="text/css">
        #menu {
            font-size: 15px;
            color: white;
            padding: 5px 5px 0 5px;
            background-color: #114912;
            height: 40px;
            top: 89px;
            right: 0px;
            text-align: right;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        #menu a {
            color: white;
            padding: 5px;
            text-decoration: none;
            text-align: center;

            right: 5px;
        </style>
        <div align="center">
            <a href="">
                <img src="../img/logo_DLU.png">
            </a>
        </div>
        <div id="menu">

            <a href="../trangchu.php">Trang Chủ</a>
            |
            <a href="../view/dangky.php">Đăng ký học phần</a>
            |
            <a href="../view/dsdangky.php">Kết quả đăng ký</a>
            |
            <a href="../view/profile.php"> 
            <?php 
              include('../publish/connect.php');
     
              //Lấy dữ liệu nhập vào
              $username = $_SESSION['username'] ;

              $sql="SELECT * FROM sinhvien WHERE username='$username'";
              $kq=mysqli_query($conn,$sql);
              if (mysqli_num_rows($kq) > 0) {
                while ($row= mysqli_fetch_assoc($kq)) {

                  echo $row['hoten'];
                }
              }
            ?></a>
            -
            <a href="../login.php">Đăng Xuất</a>
            <div class="limiter">
                <div class="container-login101">
                    <div class="wrap-login101">
                        <form class="" action="login.php" method="POST">
                            <span class="">
                                <div align="center"> <span class="">
                                        <a href="">

                                          <?php
                                            include('../publish/connect.php');
           
                                            //Lấy dữ liệu nhập vào
                                            $username = $_SESSION['username'] ;

                                            $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                            $kq=mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($kq) > 0) {
                                              while ($row= mysqli_fetch_assoc($kq)) {

                                                echo "<img height='150px' width='150px' style='border-radius: 50%;'' src='".$row['avatar']."'>";
                                              }
                                            }
                                          ?>
                                        </a>
                                    </span></div>
                            </span>
                            <div align="center"
                                style="color: black; font-size: 32px; font-weight: bold; padding: 20px;font-family: arial">
                                <?php 
                                  include('../publish/connect.php');
     
                                  //Lấy dữ liệu nhập vào
                                  $username = $_SESSION['username'] ;

                                  $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                  $kq=mysqli_query($conn,$sql);
                                  if (mysqli_num_rows($kq) > 0) {
                                    while ($row= mysqli_fetch_assoc($kq)) {

                                      echo $row['hoten'];
                                    }
                                  }
                                ?></div>

                            <div align="center">
                                <table align="center">
                                    <tr>
                                        <td class="a1">Username: </td>
                                        <td class="a2">
                                        <?php 
                                    include('../publish/connect.php');
     
                                    //Lấy dữ liệu nhập vào
                                    $username = $_SESSION['username'] ;

                                    $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                    $kq=mysqli_query($conn,$sql);
                                    if (mysqli_num_rows($kq) > 0) {
                                      while ($row= mysqli_fetch_assoc($kq)) {

                                            echo $row['username'];
                                      }
                                    }
                                  ?></td>
                                    </tr>

                                    <tr>

                                    <tr>
                                        <td class="a1">
                                            <div>Mã sinh viên: </div>
                                        </td>
                                        <td class="a2">
                                        <?php 
                                        include('../publish/connect.php');
     
                                        //Lấy dữ liệu nhập vào
                                        $username = $_SESSION['username'] ;

                                        $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                        $kq=mysqli_query($conn,$sql);
                                        if (mysqli_num_rows($kq) > 0) {
                                          while ($row= mysqli_fetch_assoc($kq)) {
                                              
                                            echo $row['masinhvien'];
                                          }
                                        }
                                      ?></td>
                                    </tr>
                                    <tr>
                                        <td class="a1">Lớp: </td>
                                        <td class="a2">
                                        <?php 
                                          include('../publish/connect.php');
     
                                          //Lấy dữ liệu nhập vào
                                          $username = $_SESSION['username'] ;

                                          $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                          $kq=mysqli_query($conn,$sql);
                                          if (mysqli_num_rows($kq) > 0) {
                                            while ($row= mysqli_fetch_assoc($kq)) {
         
                                              echo $row['lop'];
                                            }
                                          }
                                      ?></td>
                                    </tr>
                                    <tr>
                                        <td class="a1">Ngày sinh: </td>
                                        <td class="a2">
                                        <?php 
                                          include('../publish/connect.php');
     
                                          //Lấy dữ liệu nhập vào
                                          $username = $_SESSION['username'] ;

                                          $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                          $kq=mysqli_query($conn,$sql);
                                          if (mysqli_num_rows($kq) > 0) {
                                            while ($row= mysqli_fetch_assoc($kq)) {
           
                                              echo $row['ngaysinh'];
                                            }
                                          }
                                      ?></td>
                                    <tr>
                                        <td class="a1">Giới Tính: </td>
                                        <td class="a2">
                                        <?php 
                                          include('../publish/connect.php');
     
                                          //Lấy dữ liệu nhập vào
                                          $username = $_SESSION['username'] ;

                                          $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                          $kq=mysqli_query($conn,$sql);
                                          if (mysqli_num_rows($kq) > 0) {
                                            while ($row= mysqli_fetch_assoc($kq)) {
            
                                              echo $row['gioitinh'];
                                            }
                                          }
                                      ?></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td class="a1">Quê Quán: </td>
                                        <td class="a2">
                                        <?php 
                                          include('../publish/connect.php');
     
                                          //Lấy dữ liệu nhập vào
                                          $username = $_SESSION['username'] ;

                                          $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                          $kq=mysqli_query($conn,$sql);
                                          if (mysqli_num_rows($kq) > 0) {
                                            while ($row= mysqli_fetch_assoc($kq)) {
            
                                              echo $row['quequan'];
                                                }
                                          }
                                      ?></td>
                                    </tr>


                                </table>
                            </div>
                        </form>
                        <div align="center">
                            <table align="center">
                                <tr>

                                    <td colspan="2" class="a2">
                                        <?php
                                          $username = $_SESSION['username'] ;

                                          include_once("../model/sinhvien_list.php");

                                          $sql="SELECT * FROM sinhvien WHERE username='$username'";
                                          $kq=mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($kq) > 0) {

                                          while ($row=mysqli_fetch_array($kq)) {
                                              $masinhvien = $row['masinhvien'];
                                              echo "<button class ='button' type =''><a style='text-decoration:none; color: black;' href='../Controller/update_sinhvien.php?masinhvien=".$masinhvien."'>Chỉnh sửa</a></button>";
                                          }
                                        }

                                      ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>