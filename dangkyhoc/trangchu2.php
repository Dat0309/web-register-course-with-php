<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
    <!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
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

    .h1 {
        font-family: arial;
        width: 300px;
        height: 50px;
        padding-left: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: justify;
    }

    .h2 {
        font-family: arial;
        width: 700px;
        height: 150px;
        padding-left: 10px;
        font-size: 18px;
        text-align: justify;
        padding-top: 5px;
    }

    #news-block-title {
        font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

    }

    p {
        padding-top: 10px;
        font-size: 16px;
        font-weight: normal;
    }

    .a3 {
        font-size: 20px;
        text-decoration: none;
        font-style: bold;
        color: black;
        font-size: 20px;
    }

    .a3:hover {
        color: #CD2122;
    }

    .tr {
        margin: 0 0 30px;
        overflow: hidden;
        list-style-type: none;
    }
    </style>
</head>

<body>
    <div>

        <div align="center">
            <a href="">
                <img src="img/logo_DLU.png">
            </a>
        </div>
        <div id="menu">

            <a href="trangchu2.php">Trang Chủ</a>
            |
            <a href="view/quanlysinhvien.php">Quản lý sinh viên</a>
            |
            <a href="view/quanlymonhoc.php">Quản lý môn học</a>
            |

            Bạn là ADMIN -
            <a href="login.php">thoát</a>


        </div>
    </div>
    <div>
        <span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

        <div align="center" style="padding-top: 20px">
            <table style="position: relative; top: 80px;" width="1000px">
                <tr class="tr">
                    <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/truong-dai-hoc-da-lat-to-chuc-hoi-thao-ung-dung-cong-nghe-trong-viec-nang-cao-chat-luong-day-va-hoc-tai-truong-dai-hoc-nam-hoc-2021-2022/">
                            Trường Đại học Đà Lạt tổ chức Hội thảo “Ứng dụng công nghệ trong việc nâng cao chất lượng
                            dạy và học tại trường đại học” năm học 2021-2022</a>

                        <p>23/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">Trên cơ sở nhiệm vụ năm học 2021-2022, nhằm thực hiện tốt phong trào thi đua “Đổi
                        mới, sáng tạo trong dạy và học”, vào sáng ngày 30/12/2021, Công đoàn cơ sở Trường Đại học Đà Lạt
                        tổ chức Hội thảo “Ứng dụng công nghệ trong việc nâng cao chất lượng dạy và học tại trường đại
                        học” năm học 2021-2022 theo hình thức trực tiếp kết hợp trực tuyến....</td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/vien-duoc-lieu-va-truong-dai-hoc-da-lat-ky-ket-hop-tac/">
                            Viện Dược liệu và Trường Đại học Đà Lạt ký kết hợp tác</a>

                        <p>13/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">(Lâm Đồng online) – Chiều 23/12/2021, Trường Đại học Đà Lạt (DLU) và Viện Dược liệu
                        (NIMM) thuộc Bộ Y tế đã chính thức ký hợp tác nghiên cứu khoa học và đào tạo với sự có mặt của
                        PGS.TSKH. Nguyễn Minh Khởi – Viện trưởng NIMM; PGS.TS. Nguyễn Tất Thắng – Phó hiệu trưởng DLU
                        cùng các phó giáo sư, tiến sỹ, thạc sỹ của hai đơn vị…</td>
                </tr>
                </tr>
                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/truong-dai-hoc-da-lat-chung-ket-hoi-thi-tai-nang-sinh-vien/">
                            Trường Đại học Đà Lạt Chung kết Hội thi Tài năng sinh viên</a>

                        <p>11/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">(Lâm Đồng online) – Tối 10/12, tại Trường Đại học Đà Lạt, vòng chung kết Hội thi Tài
                        năng sinh viên năm 2021 được tổ chức; đồng thời, hai tổ chức Đoàn thanh niên Trường Đại học Đà
                        Lạt và Ngân hàng Thương mại cổ phần Ngoại thương Việt Nam chi nhánh tỉnh Lâm Đồng thực hiện Lễ
                        ký kết nghĩa với sự có mặt của Phó hiệu trưởng Trường Đại học Đà Lạt – PGS...</td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/hoi-nghi-tong-ket-tuyen-sinh-va-nhap-hoc-nam-2021/">
                            Hội nghị tổng kết tuyển sinh và nhập học năm 2021</a>

                        <p>24/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">Vào lúc 14h, thứ Năm, ngày 23/12/2021, tại Phòng A11.203, Trường Đại học Đà Lạt diễn
                        ra Hội nghị tổng kết tuyển sinh và nhập học năm 2021....</td>
                </tr>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>