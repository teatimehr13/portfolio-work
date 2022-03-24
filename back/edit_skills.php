<!-- dd($_GET['id']);-->

<div class="container">

    <h2 class="my-3">編輯SKILLS</h2>

    <form action="api/edit_col.php?do=edit_skills" method="post" enctype="multipart/form-data">

        <?php
        $row = $Skills->find($_GET['id']);
        // dd($row);
        $options = $row['position']
        ?>

        <div class="form-group">
            <label for="text">圖示 : </label>
            <input type="text" name="icon" value="<?= $row['icon']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="position">位置 : </label>
            <select name="position" class="form-control">
                <option value="">Please Select Option</option>
                <option value="left" <?php if ($options == "left") echo 'selected="selected"'; ?>>left</option>
                <option value="right" <?php if ($options == "right") echo 'selected="selected"'; ?>>right</option>
                <option value="top" <?php if ($options == "top") echo 'selected="selected"'; ?>>top</option>
                <option value="bottom" <?php if ($options == "bottom") echo 'selected="selected"'; ?>>bottom</option>
            </select>
        </div>
        <div class="form-group">
            <label for="class">class : </label>
            <input type="text" name="class" class="form-control" value="<?= $row['class']; ?>">
        </div>

        <div class="form-group">
            <label for="rank">文字介紹 : </label>
            <input type="text" name="text" id="text" value="<?= $row['text']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-sm">確定修改</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=pf_skills'">返回上一頁</button></td>
        </div>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

    </form>
</div>