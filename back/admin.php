<?php
    // include_once "../base.php";

    if(isset($_SESSION['del'])){
        echo "<script>";
        echo "alert('刪除成功')";
        echo "</script>";
        unset($_SESSION['del']);
    }
?>

<style>
    .fa-square-plus:hover {
        cursor: pointer;
    }
</style>

<div class="container">
    <h2 class="my-3">帳號管理</h2>
    <i class="fa-solid fa-square-plus fa-3x" style="color: purple;" onclick="location.href='back2.php?do=add_user'"></i>
    <form action="api/del_col.php?do=admin" method="post">
    <table class="table table-striped text-center">
        <tr>
            <td width="20%">會員帳號</td>
            <td width="20%">密碼</td>
            <td width="20%">刪除</td>
        </tr>
        <tr>
            <?php
            $rows = $Admin->all();
            // $checked="checked";
            foreach ($rows as $row) {
            ?>
                <td><?= $row['acc']; ?></td>
                <td><?= $row['pw']; ?></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id'];?>"></td> <!--選中的-->
                <input type="hidden" name="id[]" value="<?= $row['id'];?>"> <!--把全部的id傳過去-->
                <input type="hidden" name="table" value="pf_admin">
               
        </tr>
    <?php
            }
    ?>
    
    </table>
    <div class="text-center my-3"><button type="submit" class="btn btn-danger btn-sm">確定刪除</button></div>
    
    </form>
</div>

