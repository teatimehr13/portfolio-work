<?php include_once "../base.php";

// dd($_POST['sh']);

foreach ($_POST['id'] as $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Titles->del($id);
        $_SESSION['del']='del';
    } else {

        if (isset($_POST['sh'])) {
            $sh = $Titles->find($id);
            $sh['sh'] = ($_POST['sh'] == $id) ? 1 : 0;  //被選的為1，其它皆為0
            // if($sh['sh']==0){
            //     $sh['sh']=1;
            // }else{
            //     if($sh['sh']==1){
            //         $sh['sh']=0;
            //     }
            // }

            $Titles->save($sh);  //全部的值(1,0)都會被存回去
            // dd($id); // 1,2,3,4
            // dd($_POST['sh']); // 3,3,3,3 (假設radio第3個被選取)
            // dd($sh); //0,0,1,0

        }
    }
}

to('../back2.php?do=pf_title');
