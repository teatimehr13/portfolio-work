<?php
    if(isset($_SESSION['ok'])){
        echo "<script>";
        echo "alert('更新成功')";
        echo "</script>";
        unset($_SESSION['ok']);
    }
?>

<div class="container">
    <h2 class="my-3">FOOTER管理</h2>
    <!-- <form action="/api/edit_col.php?do=edit_bottom" method="post"> -->
        <?php
            $btm=$Bottom->find(1);
            // echo $btm['bottom'];
        ?>
        <div class="form-group">
            <input style="width:100%" type="text" class="form-control btm" value="<?= $Bottom->find(1)['bottom']; ?>">
            <input type="hidden" value="<?=$Bottom->find(1)['id']?>" class="id">
        </div>
        <button type="button" class="btn btn-info btn-sm" onclick="revise()">修改確定</button>
    <!-- </form> -->
</div>

<script>
    function revise(){
        let comfirms = "確定要修改footer嗎?";
        let id =$('.id').val();  //ajax不看name
        let bottom=$('.btm').val(); 
        // alert(bottom);
        if(confirm(comfirms)==true){
            $.post("api/edit_col.php?do=edit_bottom",{id,bottom},(chk)=>{
                location.reload();
                // alert(chk);
            })
        }
    }
</script>