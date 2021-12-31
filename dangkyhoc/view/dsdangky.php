<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
    <!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>Kết quả đăng ký</title>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
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

    /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */
    .td {
        padding-left: 10px;
    }

    #menu {
        font-size: 15px;
        color: white;
        padding: 5px 5px 0 5px;
        background-color: #114912;
        height: 30px;
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

    }
    </style>
</head>

<body>
    <div>
        <div align="center">
            <a href="">
                <img src="../img/logo_DLU.png">
            </a>
        </div>
        <!-- menu bar -->
        <div id="menu">

            <a href="../trangchu.php">Trang Chủ</a>
            |
            <a href="../view/dangky.php">Đăng ký học phần</a>
            |
            <a href="dsdangky.php">Kết quả đăng ký</a>
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
                    # code...
                    echo $row['hoten'];
                  }          
                }
                ?></a>
            -
            <a href="../login.php">Đăng Xuất</a>

        </div>
    </div>
    <div style="padding-top: 60px">
        <div align="center" style="font-weight: bold; font-size: 30px; color: black; margin: 15px">KẾT QUẢ ĐĂNG KÝ HỌC PHẦN</div>
        <div align="center">
            <style type="text/css">
            #thongtin {
                color: black;
                margin: 30px;
                font-weight: bold;
            }
            </style>
            <div id="thongtin">
                <?php 
                include('../publish/connect.php');
     
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'] ;

                $sql="SELECT * FROM sinhvien WHERE username='$username'";
                $kq=mysqli_query($conn,$sql);
                if (mysqli_num_rows($kq) > 0) {
                  while ($row= mysqli_fetch_assoc($kq)) {
                    # code...
                    echo "Họ tên: ".$row['hoten']."<br>";

                    echo "Mã Sinh Viên: ".$row['masinhvien'];
                    echo "  -  Lớp: ".$row['lop'];
                  }
                }
                ?>
            </div>
        </div>
        <div>
            <div>
                <style type="text/css">
                #them {
                    color: black;
                    position: relative;
                    left: 50px;
                }
                </style>
            </div>
        </div>
        <div align="center" style="color: #00A005; font-size: 25px; margin: 20px">

            Danh sách học phần đã đăng ký
        </div>
        <div style="position: relative;left: 5px">
            <div align="center">
                <table align="center" width="100%" style=" border: 1px;border-color:black;  width: 1500px;">
                    <tbody>
                        <tr align="center"
                            style="height: 30px; width: 100px; text-align: center;background: #009AFF; color: white;">
                            <td><b>STT</b></td>
                            <td style="width: 100px"><b>Mã môn học</b></td>
                            <td style="width: 500px"><b>Môn học</b></td>
                            <td><b>giảng viên</b></td>
                            <td style="width: 100px"><b>Số tín chỉ</b></td>
                            <td><b>Ghi chú</b></td>
                            <td><b>Xóa</b></td>
                        </tr>

                        <?php 
                        $username = $_SESSION['username'] ;
                        include_once("../publish/connect.php");
  
                        $sql="SELECT  *
                        FROM sinhvien INNER JOIN dsdangky
                        on sinhvien.masinhvien=dsdangky.masinhvien
                        WHERE username='$username' ";
                        $kq=mysqli_query($conn,$sql);

                        $id=0;
                        while ($row=mysqli_fetch_array($kq)) {
                          $mamonhoc = $row['mamonhoc'];
                          $id+=1;
                          echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                          echo "<td  style='text-align:center;'>".$id."</td>";
                          echo "<td class='td'>".$row['mamonhoc']."</td>";
                          echo "<td class ='td'>".$row['dstenmonhoc']."</td>";
                          echo "<td class='td'>".$row['dsgiangvien']."</td>";
                          echo "<td align='center'>".$row['dssotinchi']."</td>";
                          echo "<td class='td'>".$row['dshocphi']."</td>";
                  
                          echo "<td align='center'><a href='../Controller/delete_dsdangky.php?mamonhoc=".$mamonhoc."'><img align='center' src='../img/delete.gif'></a></td>";
                          echo "</tr>";   
                        # code...
                        }
                      ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>