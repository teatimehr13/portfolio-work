<?php
    if(isset($_SESSION['ok'])){
        echo "<script>";
        echo "alert('更新成功')";
        echo "</script>";
        unset($_SESSION['ok']);
    }

    if (isset($_SESSION['del'])) {
        echo "<script>";
        echo "alert('刪除成功')";
        echo "</script>";
        unset($_SESSION['del']);
    }
    ?>


<style>
    .fa-square-plus:hover{
        cursor: pointer;
    }
</style>    
<div class="container">
    <h2 class="my-3">COLLECTION管理</h2>
    <i class="fa-solid fa-square-plus fa-3x" style="color: purple;" onclick="location.href='back2.php?do=add_col'"></i>
    <table class="table table-striped text-center">
        <tbody>
            <tr>
                <td width="20%">作品圖</td>
                <td width="20%">作品名稱</td>
                <td width="20%">作品分類</td>
                <td width="20%">顯示狀態</td>
                <td width="20%">刪改 / 排序</td>
            </tr>

            <?php
            $rows = $Collection->all(" ORDER BY rank ASC");
            // echo($rows[0]['id']);
            foreach ($rows as $key => $row) {
                if($key==0){
                    $up=$row['id']. "-" .$row['id'];
                    $down=$row['id']. "-" .$rows[$key+1]['id'];
                }
                if($key>0 && $key<(count($rows)-1)){  //在第一和最後的區間
                    $up=$row['id']. "-" .$rows[$key-1]['id'];
                    $down=$row['id']. "-" .$rows[$key+1]['id'];
                }
                if($key==(count($rows)-1)){
                    $up=$row['id']. "-" .$rows[$key-1]['id'];
                    $down=$row['id']. "-" .$row['id'];
                }
            ?>
                <tr>
                    <td width="10%"> <img src="./img/<?= $row['img']; ?>" style="width:100px;height:80px"></td>
                    <td width="10%"><?= $row['text']; ?></td>
                    <!-- <td width="10%"><?= $row['category']; ?></td> -->
                    <td width="10%"><?= $row['sort']; ?></td>
                    <td width="10%"><a href="#" onclick="status(<?= $row['id']; ?>,<?= $row['sh']; ?>)"> <?= $checked = ($row['sh'] == 1) ? "顯示中" : "未顯示"; ?></a></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" onclick="location.href='?do=edit_col&id=<?= $row['id']; ?>'">修改</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="del('pf_collection',<?= $row['id']; ?>,'<?= $row['text']; ?>')">刪除</button><br>
                        <!-- <button type="button" class="btn btn-danger btn-sm del" data-id="<?= $row['id']; ?>" data-table="pf_collection" data-text="<?= $row['text']; ?>">刪除</button> -->
                        <button type="button" class="btn btn-secondary btn-sm switch"  data-switch="<?=$up?>">往上</button> <!--不可以用id命名2個switch-->
                        <button type="button" class="btn btn-secondary btn-sm switch"  data-switch="<?=$down?>">往下</button>
                    </td>
                </tr>
            <?php
            }
            ?>

</div>


<script>
    function del(table, id, text) {
        let confirms = "確定要刪除" + text + "嗎?";
        if (confirm(confirms) == true) {
            $.post('api/del_col.php', {
                table,
                id
            }, (chk) => {
                location.reload();
                // $('.test').html(chk);
                // window.location.replace(window.location.href);
            })
        }
    }


    //刪除寫法二
    // $(".del").on('click',function(){
    // let text=$(this).data('text');
    // let table=$(this).data('table');
    // let id=$(this).data('id');

    // let confirms="確定要刪除" + text + "嗎?";

    // if(confirm(confirms)==true){
    //     $.post('api/del_col.php',{table,id},(chk)=>{
    //         // location.reload();
    // $('.test').html(chk);
    //     })
    // }
    // })

    function status(id, sh) {
        let confirms = "確定要變更顯示狀態嗎?";
        // alert(confirms);
        if (confirm(confirms) == true) {
            $.post('api/edit_col.php?do=edit_col', {
                id,
                sh
            }, (chk) => {
                // alert(chk);
                location.reload();

            })
        }
    }

    $('.switch').on('click',(e)=>{
        let id = $(e.target).data('switch').split("-"); //將字串切割成一個字串"陣列"，後可放數字(0開始);substr為切成純字串
        // alert(id);
        let table = 'pf_collection';
        $.post("api/rank.php",{id,table},(chk)=>{
            // alert(chk);
            history.go(0);
        })
        
    })

</script>