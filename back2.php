<?php 
include_once "./base.php";
?>

<?php
    if(empty($_SESSION['login'])){
        to('./back2.php?do=login');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    

</head>

<body>

    <?php
    include "./back/navbar.php";
    ?>

    <div class="container-fluid px-0 d-flex">

        <div class="asideNav position-fixed">
            <div><a href="?do=title"><span>HEADER</span></a></div>
            <div><a href="?do=me">ME</a></div>
            <div><a href="?do=collection">COLLECTION</a></div>
            <div><a href="?do=skills">SKILLS</a></div>
            <div><a href="?do=bottom">FOOTER</a></div>
            <div><a href="?do=admin">USERS</a></div>
        </div>


        <div class="main container">
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

</body>
<!--slim沒有支援ajax及部分jquery動畫-->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>