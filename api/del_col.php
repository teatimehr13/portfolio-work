<?php include_once "../base.php";


// dd($_POST['table']);
// dd($_POST['del']);

// $do=$_POST;
// dd($do);

//一次刪多個by using form ;塞del[]&id (帳號管理)
if (!empty($_POST['id'] && $_POST['del'])) {
    foreach ($_POST['id'] as $id) {
        if (in_array($id, $_POST['del'])) {
            $db = new DB($_POST['table']);
            $db->del($id);
        }
    }
//一次刪一個 by using ajax ;只塞id  
} else {
    $db = new DB($_POST['table']);
    $img = $db->find($_POST['id']);
    unlink('../img/' . $img['img']);
    $db->del($_POST['id']);
}


to("../back2.php?do={$_GET['do']}");
