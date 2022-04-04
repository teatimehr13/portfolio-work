<?php include_once "../base.php";

$db=new db($_POST['table']);

// dd($_POST['id']);
//先找到id
$first = $db->find($_POST['id'][0]);
$second = $db->find($_POST['id'][1]);
// dd($first);
// dd($second);

//再找到該id的某欄資料
$tmp = $first['rank'];
$first['rank'] = $second['rank'];
$second['rank'] = $tmp;

//存回去
$db->save($first);
$db->save($second);
