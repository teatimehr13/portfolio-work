<div class="container">
    <h2 class="my-3">新增HEADER</h2>
    <form action="api/edit_col.php?do=edit_title" method="post" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data" -->
        <div class="form-group">
            <label for="text">圖片 : </label>
            <input type="file" name="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="text">文字 : </label>
            <input type="text" name="text"class="form-control">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-info btn-sm">新增</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=pf_header'">返回上一頁</button>
        </div>
    
    </form>
</div>