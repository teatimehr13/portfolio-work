<?php
    if(isset($_SESSION['ok'])){
        echo "<script>";
        echo "alert('更新成功')";
        echo "</script>";
        unset($_SESSION['ok']);
    }
?>

<style>
    .fa-square-plus:hover {
        cursor: pointer;
    }
</style>
<div class="container">
    <h2 class="my-3">ME管理</h2>
    <i class="fa-solid fa-square-plus fa-3x" style="color: purple;" onclick="location.href='back2.php?do=add_me'"></i>
    <table class="table table-striped text-center">
        <tbody>
            <tr>
                <td width="20%">圖片</td>
                <td width="20%">文字</td>
                <td width="20%">順序</td>
                <td width="20%">顯示狀態</td>
                <td width="20%">刪改 / 排序</td>
            </tr>

            <?php
            $rows = $Me->all(" ORDER BY rank ASC");
            foreach ($rows as $key => $row) {
                if($key==0){
                    $up=$row['id']. "-" .$row['id'];
                    $down=$row['id']. "-" .$rows[$key+1]['id'];
                }

                if($key>0 && $key<(count($rows)-1)){
                    $up=$row['id']. "-" .$rows[$key-1]['id'];
                    $down=$row['id']. "-" .$rows[$key+1]['id'];
                }

                if($key==(count($rows)-1)){
                    $up=$row['id']. "-" .$rows[$key-1]['id'];
                    $down=$row['id']. "-" .$row['id'];
                }

            ?>
                <tr>
                    <td>
                        <?php if (!empty($row['img'])) {
                            echo "<img src='./img/{$row['img']}' style='width:120px;height:100px'>";
                        }
                        ?>
                    <td>
                        <?php echo substr($row['text'],0,50)?>...
                    </td>
                    <td><?= $row['rank']; ?></td>
                    <td><a href="#" onclick="status(<?= $row['id']; ?>,<?= $row['sh']; ?>)"> <?= $checked = ($row['sh'] == 1) ? "顯示中" : "未顯示"; ?></a></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="location.href='?do=edit_me&id=<?= $row['id']; ?>'">修改</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="del('pf_me',<?= $row['id']; ?>,'<?= $row['text']; ?>')">刪除</button><br>
                        <button type="button" class="btn btn-secondary btn-sm switch"  data-switch="<?=$up?>">往上</button> <!--不可以用id命名2個switch-->
                        <button type="button" class="btn btn-secondary btn-sm switch"  data-switch="<?=$down?>">往下</button>
                    </td>
                </tr>
            <?php
            }
            ?>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function del(table, id, text) {
        let confirms = "確定要刪除" + text + "嗎?";
        if (confirm(confirms) == true) {
            $.post('api/del_col.php', {
                table,
                id
            }, (chk) => {
                location.reload();
            })
        }
    }

    function status(id, sh) {
        let confirms = "確定要變更顯示狀態嗎?";
        // alert(confirms);
        if (confirm(confirms) == true) {
            $.post('api/edit_col.php?do=edit_me', {
                id,
                sh
            }, (chk) => {
                // alert(chk);
                location.reload();

            })
        }
    }

    $('.switch').on('click',(e)=>{
        let id = $(e.target).data('switch').split("-");//將字串切割成一個字串"陣列"，後可放數字(0開始);substr為切成純字串
        let table = 'pf_me';
        $.post("api/rank.php",{id,table},(chk)=>{
            history.go(0);
            // alert(chk);
        })
    })
</script>