<?php
    include_once "../base.php";

    if(isset($_POST['acc'])){
        $chk = $Admin->math('count','*',['acc'=>$_POST['acc']]);
            if($chk>0){
                echo 1;
            }
    }

    if(!empty($_POST['acc'] && $_POST['pw'])){
        $chk2 = $Admin->save($_POST);
    }


 