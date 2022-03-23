<?php include_once "../base.php";

// dd($_POST['id']);
// dd($_POST['sh']);
// dd($_POST); //不會有img，但name的欄位還是要加img

        if(isset($_POST['sh'])){
            $col = $Collection->find($_POST['id']);
            $col['sh']= ($_POST['sh']==0)?1:0;
            $Collection->save($col);
        }else{
            if(!empty($_FILES['img']['tmp_name'])){
                $_POST['img']=$_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_POST['img']);
            }
            $Collection->save($_POST);
        }

// if($col['sh']== 0){
//     $col['sh']=1;
// }else{
//     if($col['sh']== 1){
//         $col['sh']=0;
//     }
// }

to("../back2.php?do=pf_collection");

