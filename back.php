<?php
include_once "./base.php";


if(!isset($_SESSION['login'])){ 
    to("index.php");
    exit();
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>collection</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
   <link rel="stylesheet" href="./scss/bootstrap.css">
    <!-- <link rel="stylesheet" href="./style2 copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">-->
</head>
<style>
.btn-mocha {
    color: #fff;
    background-color: #a5a58d;
    border-color: #a5a58d;
}

.btn-mocha:hover,
.btn-mocha:focus,
.btn-mocha:active:hover {
    color: #fff;
    background-color: #b7b7a4;
    border-color: #b7b7a4;
        }
</style>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">
<?php include "back/header.php";?>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="border border-secondary">
                    <!--主選單放此-->
                    <a href="?do=title">
                        <button type="button" class="btn btn-mocha btn-block my-2">HEADER</button>
                    </a>

                    <a href="?do=me">
                        <button type="button" class="btn btn-mocha btn-block my-2">ME</button>
                    </a>

                    <a href="?do=collection">
                        <button type="button" class="btn btn-mocha btn-block my-2">COLLECTION</button>
                    </a>

                    <a href="?do=skills">
                        <button type="button" class="btn btn-mocha btn-block my-2">SKILLS</button>
                    </a>

                    <a href="?do=bottom">
                        <button type="button" class="btn btn-mocha btn-block my-2">FOOTER</button>
                    </a>

                    <a href="?do=admin">
                        <button type="button" class="btn btn-mocha btn-block my-2">USERS</button>
                    </a>


                </div>
                <div class="border border-secondary" style="margin:3px; width:100%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :<?=$Total->find(1)['total'];?></span>
                </div>
            </div>
            <div class="di"
                style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><a href="logout.php"><button style="width:100%; height:50px;">管理登出</button></a></td>
                        </tr>
                    </tbody>
                </table>
                <?php

							$do=isset($_GET["do"])?$_GET["do"]:'title';
							$file="./back/".$do.".php";
							if(file_exists($file)){
								include $file;
							}else{
								//echo "檔案不存在";
								include "./back/title.php";
							}	

								?>
            </div>

        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1021px; left:0px; position:relative; background:#c9ada7; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?=$Bottom->find(1)['bottom'];?></span>
            <!-- <span><i class="fab fa-linkedin-in"></i></span> -->
        </div>
    </div>

</body>

</html>