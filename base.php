<?php
date_default_timezone_set("Asia/Taipei");
session_start();

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=web01";
    protected $user="root";
    protected $pw='';
    protected $pdo;
    public $table;
    public $title;
    public $button;
    public $header;
    public $append;
    public $upload;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
        $this->setStr($table);
    }

    private function setStr($table){
        switch($table){
            case "title";
                $this->title="HEADER管理";
                $this->button="新增HEADER圖片";
                $this->header="HEADER標題";
                $this->append="替代文字";
                $this->upload="HEADER圖片";
            break;
            case "me";
            $this->title="ME管理";
            $this->button="新增ME圖片";
            $this->header="ME標題";
            $this->append="ME替代文字";
            $this->upload="ME圖片";
            break;
            case "collection";
            $this->title="COLLECTION管理";
            $this->button="新增COLLECTION圖片";
            $this->header="COLLECTIONE標題";
            $this->append="COLLECTIONE替代文字";
            $this->upload="COLLECTION圖片";
            break;
            case "skills";
            $this->title="SKILLS管理";
            $this->button="新增SKILLS";
            $this->text="SKILLS文字介紹";
            $this->symbol="SKILLS符號";
          
            break;
            case "mvim";
            $this->title="動畫圖片管理";
            $this->button="新增動畫圖片";
            $this->header="動畫圖片";
            $this->upload="動畫圖片";
            break;
            case "bottom";
            $this->title="頁尾版權資料管理";
            $this->button="";
            $this->header="頁尾版權資料";
            break;
            case "news";
            $this->title="最新消息資料管理";
            $this->button="新增最新消息資料";
            $this->header="最新消息資料內容";
            break;
            case "admin";
            $this->title="管理者帳號管理";
            $this->button="新增管理者帳號";
            $this->header="帳號";
            $this->append="密碼";
            break;
            case "menu";
            $this->title="選單管理";
            $this->button="新增主選單";
            $this->header="主選單名稱";
            $this->append="選單連結網址";
            break;
        }
    }
    

    public function find($id){
        $sql="SELECT * FROM $this->table WHERE ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql .= implode(" AND ",$tmp);
        }else{
            $sql .= " `id`='$id'";
        }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function all(...$arg){
        $sql="SELECT * FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function math($method,$col,...$arg){
        $sql="SELECT $method($col) FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }


        return $this->pdo->query($sql)->fetchColumn();
    }
    public function save($array){
        if(isset($array['id'])){
            //update
            foreach($array as $key => $value){
                $tmp[]="`$key`='$value'";
            }
            $sql="UPDATE $this->table 
                     SET ".implode(",",$tmp)."
                   WHERE `id`='{$array['id']}'";
        }else{
            //insert

            $sql="INSERT INTO $this->table (`".implode("`,`",array_keys($array))."`) 
                                     VALUES('".implode("','",$array)."')";
        }

       // echo $sql;
        return $this->pdo->exec($sql);
    }

    public function del($id){
        $sql="DELETE FROM $this->table WHERE ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql .= implode(" AND ",$tmp);
        }else{
            $sql .= " `id`='$id'";
        }

        return $this->pdo->exec($sql);
    }
    public function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

$Total=new DB('total');
$Bottom=new DB('bottom');
$Title=new DB('title');
$Me=new DB('me');
$Collection=new DB('collection');
// $Mvim=new DB('mvim');
// $Image=new DB('image');
$Skills=new DB('skills');
// $News=new DB('news');
$Admin=new DB('admin');
// $Menu=new DB('menu');

//$tt=(isset($_GET['do']))?$_GET['do']:'';
//$tt=isset($_GET['do'])??'';
$tt=$_GET['do']??'';

switch($tt){
    case "me":
        $DB=$Me;
    break;
    case "collection":
        $DB=$Collection;
    break;
    case "mvim":
        $DB=$Mvim;
    break;
    case "skills":
        $DB=$Skills;
    break;
    case "image":
        $DB=$Image;
    break;
    case "total":
        $DB=$Total;
    break;
    case "bottom":
        $DB=$Bottom;
    break;
    case "news":
        $DB=$News;
    break;
    case "admin":
        $DB=$Admin;
    break;
    case "menu":
        $DB=$Menu;
    break;
    default:
        $DB=$Title;
    break;
}
/* $total=$Total->find(1);

//echo $Total->find(1)['total'];
echo $total['total'];

print_r($Total->all()); */

if(!isset($_SESSION['total'])){
    $total=$Total->find(1);
    $total['total']++;
    $Total->save($total);
    $_SESSION['total']=$total['total'];
}


?>