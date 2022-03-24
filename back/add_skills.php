<!-- dd($_GET['id']);-->

<div class="container">

    <h2 class="my-3">新增SKILLS</h2>

    <form action="api/edit_col.php?do=edit_skills" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="text">圖示 : </label>
            <input type="text" name="icon" class="form-control">
        </div>
        <div class="form-group">
            <label for="position">位置 : </label>
            <select name="position" class="form-control">
                <option value="">Please Select Option</option>
                <option value="left">left</option>
                <option value="right">right</option>
                <option value="top">top</option>
                <option value="bottom">bottom</option>
            </select>
        </div>
        <div class="form-group">
            <label for="class">class : </label>
            <input type="text" name="class" class="form-control">
        </div>

        <div class="form-group">
            <label for="rank">文字介紹 : </label>
            <input type="text" name="text" id="text" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-sm">確定修改</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=pf_skills'">返回上一頁</button></td>
        </div>

    </form>
</div>