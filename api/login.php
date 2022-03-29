<?php include_once "../base.php";

if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

 if (!empty($_POST)) {
    //  if ($_POST['acc'] == 'abcdefu'  && $_POST['pw'] == '1234567') {
    //     $_SESSION['login']='henry';
    //      to("../back.php");
    //  } else {
    //     $_SESSION['error']="帳號或密碼錯誤";
    //     }
    //     to("../login.php");
    $chk = $Admin->math('count','*',['acc'=>$_POST['acc'] ,'pw'=>$_POST['pw']]);
    if($chk>0){
        $_SESSION['login']=$_POST['acc'];
        to("../back2.php");
    }else{
        $_SESSION['error']='帳號或密碼錯誤';
        to('../login.php');
    }
    
    } 


 ?>


