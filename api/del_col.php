<?php include_once "../base.php";


// dd($_POST['table']);
// dd($_POST['del']);

// $do=$_POST;
// dd($do);

//一次刪多個by using form ;塞del[]值為id (帳號管理)
if (!empty($_POST['del'])) {
    foreach ($_POST['del'] as $id) {
            $db = new DB($_POST['table']);
            $db->del($id);
    }

//一次刪一個 by using ajax ;塞id  (作品集管理)
} else {
    $db = new DB($_POST['table']);
    $img = $db->find($_POST['id']);
    unlink('../img/' . $img['img']);
    $db->del($_POST['id']);
}


to("../back2.php?do={$_GET['do']}");
