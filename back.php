<?php
include_once "./base.php";

if (!isset($_SESSION['login'])) {
    to("index.php");
    exit();
}
?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>collection</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <!-- <script src="./js/jquery-1.9.1.min.js"></script> -->
    <script src="./js/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./scss/bootstrap.css">
    <!-- <link rel="stylesheet" href="./style2 copy.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .btn-purple {
        color: #fff;
        background-color: #c89fa3;
        border-color: #c89fa3;
    }

    .btn-purple:hover,
    .btn-purple:focus,
    .btn-purple:active:hover {
        color: #fff;
        background-color: #b5838d;
        border-color: #b5838d;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<body>
    <?php include_once "back/ajaxButton.php"; ?>

    <div id="main">
        <?php include "back/pf_header.php"; ?>
        <div id="ms">

            <?php include_once "back/pf_sideNav.php"; ?>

            <div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><a href="logout.php"><button style="width:100%; height:50px;">管理登出</button></a></td>
                        </tr>
                    </tbody>
                </table>
                <?php

                $do = isset($_GET["do"]) ? $_GET["do"] : 'title';
                $file = "./back/" . $do . ".php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    //echo "檔案不存在";
                    include "./back/pf_title.php";
                }

                ?>
            </div>

        </div>
        <div style="clear:both;"></div>
        <?php include_once "./back/pf_footer.php" ?>
    </div>

</body>

</html>