<?php
include_once "../base.php";
foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        //刪除
        $DB->del($id);

    }else{
        //更新
        $data=$DB->find($id);

        switch($DB->table){
            case "pf_title":
                $data['text']=$_POST['text'][$key];
                $data['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "pf_admin":
                $data['acc']=$_POST['acc'][$key];
                $data['pw']=$_POST['pw'][$key];
            break;
            case "pf_menu":
                $data['name']=$_POST['name'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "pf_collection":
                $data['text']=$_POST['text'][$key];
                $data['category']=$_POST['category'][$key];
                $data['icon_eyes']=$_POST['icon_eyes'][$key];
                $data['icon_gh']=$_POST['icon_gh'][$key];
                $data['link_eyes']=$_POST['link_eyes'][$key];
                $data['link_gh']=$_POST['link_gh'][$key];
                $data['rank']=$_POST['rank'][$key];
                $data['sort']=$_POST['sort'][$key];
                $data['titles']=$_POST['titles'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "pf_me":
                $data['text']=$_POST['text'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $data['ordered']=$_POST['ordered'][$key];
                $data['titles']=$_POST['titles'][$key];
            break;
                default:
                //ad,,news,image,mvim
                $data['text']=isset($_POST['text'])?$_POST['text'][$key]:'';
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $data['class']=$_POST['class'][$key];
                $data['icon']=$_POST['icon'][$key];
                $data['position']=$_POST['position'][$key];
                $data['titles']=$_POST['titles'][$key];
            break;

        }

        //dd($data);
        $DB->save($data);
    }

}

to("../back.php?do=".$DB->table);

?>