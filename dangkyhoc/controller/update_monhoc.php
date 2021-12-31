<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa môn học</title>
    <style type="text/css">
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
    <?php
  $mamonhoc=$_GET['mamonhoc'];
  include_once("../publish/connect.php");


  $sql="SELECT * From monhoc Where mamonhoc='$mamonhoc'";
  $kq=mysqli_query($conn,$sql);
  
  $ar=mysqli_fetch_array($kq);
?>
    <div align="center">
        <a href="">
            <img src="../img/logo_DLU.png">
        </a>
    </div>
    <div align="center">
        <form method="post" action="../model/xulyupdate.php">

            <table>
                <tr>
                    <td><input type="hidden" name="mamonhoc" value="<?php echo $mamonhoc ?>"></td>
                </tr>
                <tr>
                    <th>Tên Môn Học :</th>
                    <td><input type="text" name="tenmonhoc" value="<?php echo $ar['tenmonhoc'] ?>"></td>
                </tr>
                <tr>
                    <th>Giảng Viên:</th>
                    <td><input type="text" name="giangvien" value="<?php echo $ar['giangvien'] ?>"></td>
                </tr>
                <tr>
                    <th>Số tín chỉ:</th>
                    <td><input type="text" name="sotinchi" value="<?php echo $ar['sotinchi'] ?>"></td>
                </tr>
                <tr>
                    <th>Học phí:</th>
                    <td><input type="text" name="hocphi" value="<?php echo $ar['hocphi'] ?>"></td>
                </tr>

                <tr>

                    <td></td>
                    <td> <button type="submit" class="button">Sửa</button></td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>