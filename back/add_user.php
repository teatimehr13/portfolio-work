<div class="container">
    <h2 class="my-3">新增帳號</h2>
    <!-- <form action="api/del_col.php?do=pf_admin" method="post"> -->

        <div class="form-group">
            <label for="text">帳號 : </label>
            <input type="text" id="acc" class="form-control">
        </div>

        <div class="form-group">
            <label for="text">密碼 : </label>
            <input type="text" id="pw"class="form-control">
        </div>

        <div class="form-group">
            <label for="text">請再次輸入密碼 : </label>
            <input type="text" id="pw2"class="form-control">
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-info btn-sm" onclick="submit()">確定修改</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=admin'">返回上一頁</button>
        </div>
    
    <!-- </form> -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    function submit(){
        let user = {
            acc: $('#acc').val(),
            pw: $('#pw').val(),
            pw2: $('#pw2').val()
        }

        if(Object.values(user).indexOf('')>=0){
            alert('欄位不可空白')
        }else{
            if(user.pw != user.pw2){
                alert('密碼不一致')
            }else{
                $.post('api/chk_user.php',{acc:user.acc},(chk)=>{
                    if(parseInt(chk)>0){
                        alert('帳號重複')
                    }else{
                        delete user.pw2;
                        $.post('api/chk_user.php',user,(chk2)=>{
                            alert('註冊完成')
                            location.href='back2.php?do=admin';
                            // alert(chk2);
                        })
                    }
                })
            }
        }
    }
</script>