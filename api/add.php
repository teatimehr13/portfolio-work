<?php

include  "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}else{
    if($DB->table!='admin' && $DB->table!='menu'){
        $data['img']='';
    }
}


switch($DB->table){
    case "title":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "admin":
        $data['acc']=$_POST['acc'];
        $data['pw']=$_POST['pw'];
    break;
    case "menu":
        $data['name']=$_POST['name'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
        $data['parent']=0;
    break;
    case "skills":
        $data['text']=$_POST['text'];
        $data['class']=$_POST['class']??'';
        $data['icon']=$_POST['icon'];
        $data['position']=$_POST['position'];
        $data['sh']=1;
    break;
    case "collection":
        $data['text']=$_POST['text'];
        $data['category']=$_POST['category'];
        $data['icon_eyes']=$_POST['icon_eyes']??'';
        $data['icon_gh']=$_POST['icon_gh']??'';
        $data['link_eyes']=$_POST['link_eyes']??'';
        $data['link_gh']=$_POST['link_gh']??'';
        $data['rank']=$_POST['rank']??'';
        $data['sort']=$_POST['sort']??'';
        $data['sh']=1;
    break;
    default:
        $data['text']=$_POST['text']??'';
        $data['sh']=1;
        $data['ordered']=$_POST['ordered']??'';
    break;

}

$DB->save($data);
to("../back.php?do=".$DB->table)
?>