<?php
    if(isset($_SESSION['del'])){
        echo "<script>";
        echo "alert('刪除成功')";
        echo "</script>";
        unset($_SESSION['del']);
    }
?>
<div class="container">
    <h2 class="my-3">HEADER管理</h2>
    <i class="fa-solid fa-square-plus fa-3x" style="color: purple;" onclick="location.href='back2.php?do=add_user'"></i>
    <form action="api/edit_title.php" method="post">
    <table class="table table-striped text-center">
        <tr>
            <td width="20%">圖片</td>
            <td width="20%">文字</td>
            <td width="20%">顯示</td>
            <td width="20%">刪除</td>
            <td width="20%"></td>
        </tr>
        <tr>
            <?php
            $rows = $Titles->all();
            foreach ($rows as $row) {
            $checked=($row['sh']==1)?"checked":'';    
            ?>
                <td><img src="../img/<?= $row['img'];?>" style="width:300px;height:30px"></td>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

