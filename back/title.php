<?php
    if(isset($_SESSION['ok'])){
        echo "<script>";
        echo "alert('新增成功')";
        echo "</script>";
        unset($_SESSION['ok']);
    }

    if(isset($_SESSION['del'])){
        echo "<script>";
        echo "alert('刪除成功')";
        echo "</script>";
        unset($_SESSION['del']);
    }
    
    if(isset($_SESSION['sh'])){
        echo "<script>";
        echo "alert('顯示變更成功')";
        echo "</script>";
        unset($_SESSION['sh']);
    }
?>

<style>
    .fa-square-plus:hover {
        cursor: pointer;
    }
</style>

<div class="container">
    <h2 class="my-3">HEADER管理</h2>
    <i class="fa-solid fa-square-plus fa-3x" style="color: purple;" onclick="location.href='back2.php?do=add_header'"></i>
    <form action="api/edit_title.php" method="post">
    <table class="table table-striped text-center">
        <tr>
            <td width="20%">圖片</td>
            <td width="20%">文字</td>
            <td width="20%">顯示</td>
            <td width="20%">刪除</td>
            <td width="20%">修改</td>
        </tr>
        <tr>
            <?php
            $rows = $Titles->all();
            foreach ($rows as $row) {
            $checked=($row['sh']==1)?"checked":'';    
            ?>
                <td><img src="./img/<?= $row['img'];?>" style="width:300px;height:30px" class="img-fluid"></td>
                <td><?= $row['text']; ?></td>
                <td><input type="radio" name="sh" value="<?=$row['id'];?>" <?=$checked;?>></td> <!--選中的-->
                <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <td><button type="button" class="btn btn-warning btn-sm" onclick="location.href='?do=edit_title&id=<?= $row['id']; ?>'">修改</button></td>
                <input type="hidden" name="id[]" value="<?= $row['id'];?>"> <!--把全部的id傳過去-->
                <!-- <input type="hidden" name="table" value="pf_title"> -->
               
        </tr>
    <?php
            }
    ?>
    
    </table>
    <div class="text-center my-3"><button type="submit" class="btn btn-danger btn-sm">變更確定</button></div>
    
    </form>
</div>
