<!DOCTYPE html>
<html>

<head>
    <title>Thêm môn học</title>
    <meta charset="UTF-8">

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

    /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */
    /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */
    /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */
    </style>
</head>

<body>
    <div align="center">
        <a href="">
            <img src="../img/logo_DLU.png">
        </a>
    </div>

    <form method="post" action="../model/xulymonhoc.php">
        <h1 style="text-align: center;">THÊM MÔN HỌC </h1>
        <table align="center">

            <tr>
                <td>Mã Môn học:</td>
                <td><input type="text" name="mamonhoc"></td>
            </tr>
            <tr>
                <td>Môn học:</td>
                <td><input type="text" name="tenmonhoc"></td>
            </tr>
            <tr>
                <td>Khoa:</td>
                <td><select class="" name="makhoa">
                        <?php
                           include_once("../publish/connect.php");
  
                                $sql="SELECT * FROM monhoc INNER JOIN khoa ON monhoc.makhoa = khoa.makhoa";
                                $kq=mysqli_query($conn,$sql);
                                include_once('../model/monhoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['makhoa'].">khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Giảng Viên:</td>
                <td><input type="text" name="giangvien"></td>
            </tr>
            <tr>
                <td>Số tín chỉ:</td>
                <td><input type="text" name="sotinchi"></td>
            </tr>
            <tr>
                <td>Học phí:</td>
                <td><input type="text" name="hocphi"></td>
            </tr>

            <tr>
                <td></td>
                <td align="center"><input type="submit" class="button" name="btn_themmonhoc" value="Thêm"></td>
            </tr>




        </table>

    </form>

</body>

</html>