<!-- dd($_GET['id']);-->
<!-- <?php
    if(isset($_SESSION['ok'])){
        echo "<script>";
        echo "alert('更新成功')";
        echo "</script>";
        unset($_SESSION['ok']);
    }
?> -->

<div class="container">

    <h2 class="my-3">編輯HEADER</h2>

    <form action="api/edit_col.php?do=edit_title" method="post" enctype="multipart/form-data">

        <?php
        $row = $Titles->find($_GET['id']);
        // dd($row);
        ?>

        <div class="form-group">
            <label for="text">圖片 : </label>
            <input type="file" name="img" value="<?= $row['img']; ?>" class="form-control-file">
            <?php
                if(!empty($row['img'])){
                echo "<input type='text' name='img' value='{$row['img']}' class='form-control'>";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="text">文字 : </label>
            <input type="text" name="text" class="form-control" value="<?= $row['text']; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info btn-sm">確定修改</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="history.go(-1)">返回上一頁</button></td>
        </div>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

    </form>
</div>