<?php include_once "../base.php";

 if (!empty($_POST)) {
     if ($_POST['acc'] == 'abcdefu'  && $_POST['pw'] == '1234567') {
        $_SESSION['login']='henry';
         to("../back.php");
     } else {
         echo "<script>";
         echo "alert('帳號或密碼錯誤')";
         echo "</script>";
     }
 } 

 ?>


