<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>collection</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./scss/bootstrap.css">
    <link rel="stylesheet" href="./style2 copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

    </style>
</head>
<!-- <body > -->

<body class="body">
    <?php include_once "./front/header.php"?>
    <?php include_once "./front/sideNav.php"?>
    <?php include_once "./front/homeCover.php"?>
    <?php include_once "./front/me.php"?>
    <?php include_once "./front/collection.php"?> 

   

    <div class="container-fluid text-center" id="skills" style="padding: 80px 0px;">
        <h1 class="mb-5 text-golden">SKILLS</h1>
        <div class="row skillsIcon mx-5 justify-content-between">
            <div class="col-md-4 align-self-md-center"><i class="fab fa-html5"></i></div>
            <div class="col-md-4 py-0 my-0">
                <i class="fab fa-php"></i><br>
                <i class="fab fa-js-square"></i>
            </div>
            <div class="col-md-4 align-self-md-center"><i class="fab fa-css3-alt"></i></div>
        </div>

        <div class="skillsContent">
            <span class="phpContent">使用PHP串接SQL可將資料放在伺服器端進行驗證或讀取，避免資料的暴露或被攻擊。</span>
            <span class="htmlContent">HTML5支援影音檔的播放及新的網頁區塊標籤，讓電腦更容易辨認網頁架構藉此提高搜尋引擎排名。</span>
            <span class="cssContent">CSS3新增了文字陰影、盒子模型、漸變及偽元素等讓網頁呈現方式更加多樣化的新選擇器。</span>
            <span class="jsContent">JS在商業上可搭配GTM設定滑鼠停留事件(onmouseover)追蹤，紀錄使用者停留在特定網頁時間長度;
                或使用滑鼠點擊事件紀錄商品被點擊的次數。</span>
        </div>
    </div>

    <div class="container-fluid py-3 text-white text-center" style="background: rgba(0,0,0,.3);">
        <div class="d-block footer mb-2">
            <a href="#"><i class="fab fa-facebook mx-2"></i></a>
            <a href="#"><i class="fab fa-instagram mx-2"></i></a>
            <a href="#"><i class="fab fa-twitter mx-2"></i></a>
            <a href="#"><i class="fab fa-github mx-2"></i></a>
            <a href="#"><i class="fab fa-codepen mx-2"></i></a>
        </div>
        <!-- <div id="scrollReport">目前滑動狀態</div> -->
        <span style="text-transform:uppercase;">Copyright © 2022, All Rights Reserved</span>

    </div>

    <div class="fullCover" style="z-index: 2;"></div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/jquery.js"></script>


</body>

</html>