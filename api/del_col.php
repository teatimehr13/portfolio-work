<?php include_once "../base.php";


// dd($_POST['table']);
// dd($_POST['id']);

$db=new DB($_POST['table']);
$img=$db->find($_POST['id']);
unlink('../img/'.$img['img']);
$db->del($_POST['id']);