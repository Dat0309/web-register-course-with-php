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

            <a href="trangchu2.php">Trang Ch???</a>
            |
            <a href="view/quanlysinhvien.php">Qu???n l?? sinh vi??n</a>
            |
            <a href="view/quanlymonhoc.php">Qu???n l?? m??n h???c</a>
            |

            B???n l?? ADMIN -
            <a href="login.php">tho??t</a>


        </div>
    </div>
    <div>
        <span style="z-index: -1; " id="news-block-title">TIN T???C S??? KI???N</span>

        <div align="center" style="padding-top: 20px">
            <table style="position: relative; top: 80px;" width="1000px">
                <tr class="tr">
                    <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/truong-dai-hoc-da-lat-to-chuc-hoi-thao-ung-dung-cong-nghe-trong-viec-nang-cao-chat-luong-day-va-hoc-tai-truong-dai-hoc-nam-hoc-2021-2022/">
                            Tr?????ng ?????i h???c ???? L???t t??? ch???c H???i th???o ??????ng d???ng c??ng ngh??? trong vi???c n??ng cao ch???t l?????ng
                            d???y v?? h???c t???i tr?????ng ?????i h???c??? n??m h???c 2021-2022</a>

                        <p>23/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">Tr??n c?? s??? nhi???m v??? n??m h???c 2021-2022, nh???m th???c hi???n t???t phong tr??o thi ??ua ????????i
                        m???i, s??ng t???o trong d???y v?? h???c???, v??o s??ng ng??y 30/12/2021, C??ng ??o??n c?? s??? Tr?????ng ?????i h???c ???? L???t
                        t??? ch???c H???i th???o ??????ng d???ng c??ng ngh??? trong vi???c n??ng cao ch???t l?????ng d???y v?? h???c t???i tr?????ng ?????i
                        h???c??? n??m h???c 2021-2022 theo h??nh th???c tr???c ti???p k???t h???p tr???c tuy???n....</td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/vien-duoc-lieu-va-truong-dai-hoc-da-lat-ky-ket-hop-tac/">
                            Vi???n D?????c li???u v?? Tr?????ng ?????i h???c ???? L???t k?? k???t h???p t??c</a>

                        <p>13/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">(L??m ?????ng online) ??? Chi???u 23/12/2021, Tr?????ng ?????i h???c ???? L???t (DLU) v?? Vi???n D?????c li???u
                        (NIMM) thu???c B??? Y t??? ???? ch??nh th???c k?? h???p t??c nghi??n c???u khoa h???c v?? ????o t???o v???i s??? c?? m???t c???a
                        PGS.TSKH. Nguy???n Minh Kh???i ??? Vi???n tr?????ng NIMM; PGS.TS. Nguy???n T???t Th???ng ??? Ph?? hi???u tr?????ng DLU
                        c??ng c??c ph?? gi??o s??, ti???n s???, th???c s??? c???a hai ????n v??????</td>
                </tr>
                </tr>
                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/truong-dai-hoc-da-lat-chung-ket-hoi-thi-tai-nang-sinh-vien/">
                            Tr?????ng ?????i h???c ???? L???t Chung k???t H???i thi T??i n??ng sinh vi??n</a>

                        <p>11/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">(L??m ?????ng online) ??? T???i 10/12, t???i Tr?????ng ?????i h???c ???? L???t, v??ng chung k???t H???i thi T??i
                        n??ng sinh vi??n n??m 2021 ???????c t??? ch???c; ?????ng th???i, hai t??? ch???c ??o??n thanh ni??n Tr?????ng ?????i h???c ????
                        L???t v?? Ng??n h??ng Th????ng m???i c??? ph???n Ngo???i th????ng Vi???t Nam chi nh??nh t???nh L??m ?????ng th???c hi???n L???
                        k?? k???t ngh??a v???i s??? c?? m???t c???a Ph?? hi???u tr?????ng Tr?????ng ?????i h???c ???? L???t ??? PGS...</td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://dlu.edu.vn/hoi-nghi-tong-ket-tuyen-sinh-va-nhap-hoc-nam-2021/">
                            H???i ngh??? t???ng k???t tuy???n sinh v?? nh???p h???c n??m 2021</a>

                        <p>24/12/2021</p>
                    </td>
                <tr>
                    <td class="h2">V??o l??c 14h, th??? N??m, ng??y 23/12/2021, t???i Ph??ng A11.203, Tr?????ng ?????i h???c ???? L???t di???n
                        ra H???i ngh??? t???ng k???t tuy???n sinh v?? nh???p h???c n??m 2021....</td>
                </tr>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>