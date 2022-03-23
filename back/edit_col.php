<!-- dd($_GET['id']);-->

<div class="container">

<h2 class="my-3">編輯COLLECTION</h2>

<form action="api/edit_col.php?do=edit_col" method="post" enctype="multipart/form-data">
    <!-- <table style="background-color: rgba(235, 235, 235);"> -->

        <?php
        $row = $Collection->find($_GET['id']);
        // dd($row);
        ?>

        <div class="form-group">
            <label for="img">作品圖 : </label>
           <input type="file" name="img" value="<?= $row['img']; ?>" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="text">作品名稱 : </label>
            <input type="text" name="text" value="<?= $row['text']; ?>" class="form-control">
        </div>
        <div class="form-group">
            <td><label for="category">種類 : </label></td>
            <td><input type="text" name="category" id="category" value="<?= $row['category']; ?>" class="form-control"> </td>
        </div>
        <div class="form-group">
            <td><label for="sort">分類 : </label></td>
            <!-- <td><input type="text" name="sort" id="sort" value="<?= $row['sort']; ?>"> </td> -->
            <td>
                <?php
                $options = $row['sort'];
                ?>
                <select name="sort" class="form-control">
                    <option value="">--請選擇分類--</option>
                    <option value="b2n" <?php if ($options == "b2n") echo 'selected="selected"'; ?>>b2n</option>
                    <option value="f2n" <?php if ($options == "f2n") echo 'selected="selected"'; ?>>f2n</option>
                    <option value="others" <?php if ($options == "others") echo 'selected="selected"'; ?>>others</option>
                </select>
            </td>
        </div>
        <div class="form-group">
            <td><label for="icon_eyes">圖示 : </label></td>
            <td><input type="text" name="icon_eyes" id="icon_eyes" value="<?= $row['icon_eyes']; ?> " class="form-control"> </td>
        </div>
        <div class="form-group">
            <td><label for="icon_gh">圖示(gh) : </label></td>
            <td><input type="text" name="icon_gh" id="icon_gh" value="<?= $row['icon_gh']; ?>" class="form-control"> </td>
        </div>
        <div class="form-group">
            <td><label for="link_eyes">連結 : </label></td>
            <td><input type="text" name="link_eyes" id="link_eyes" value="<?= $row['link_eyes']; ?>" class="form-control"> </td>
        </div>
        <div class="form-group">
            <td><label for="link_gh">連結(gh) : </label></td>
            <td><input type="text" name="link_gh" id="link_gh" value="<?= $row['link_gh']; ?>" class="form-control"> </td>
        </div>
        <div class="form-group">
            <td><label for="rank">順序 : </label></td>
            <td><input type="text" name="rank" id="rank" value="<?= $row['rank']; ?>" class="form-control"> </td>
        </div>
        <div class="form-group">
            <td class="py-3"><button type="submit" class="btn btn-info btn-sm">確定修改</button></td>
            <td><button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=pf_collection'">返回上一頁</button></td>
        </div>
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <!-- </table> -->

    

        
        </form>
    </div>

<!-- <table width="100%">
        <tbody>
            <tr>
                <td width="10%">作品圖</td>
                <td width="10%">作品名稱</td>
                <td width="10%">category</td>
                <td width="10%">作品分類</td>
                <td width="10%">icon_eyes</td>
                <td width="10%">icon_gh</td>
                <td width="10%">link_eyes</td>
                <td width="10%">link_gh</td>
                <td width="2%">rank</td>
                <td width="10%">顯示狀態</td>
                <td>修改/刪除</td>
            </tr> -->





<!-- <?php
        $rows = $DB->all();
        foreach ($rows as $row) {
            $checked = ($row['sh'] == 1) ? 'checked' : '';
        ?>
                    <!-- <tr class="text-center">
                        <td width="30%">
                            <img src="./img/<?= $row['img']; ?>" style="width:100px;height:80px">
                        </td>
                        <td width="10%">
                            <input type="text" name="text[]" value="<?= $row['text']; ?>">
                        </td>

                        <td width="10%">
                            <input type="text" name="category[]" value="<?= $row['category']; ?>" style="width:70px">
                        </td>

                        <?php
                        $options = $row['sort'];
                        ?>

                        <td width="10%">
                        <select name="sort[]" style="height:32px;width:70px">
                            <option value="">Please Select Option</option>
                            <option value="b2n" <?php if ($options == "b2n") echo 'selected="selected"'; ?> >b2n</option>
                            <option value="f2n" <?php if ($options == "f2n") echo 'selected="selected"'; ?> >f2n</option>
                            <option value="others" <?php if ($options == "others") echo 'selected="selected"'; ?> >others</option>
                        </select>
                        </td>

                        <td width="10%">
                            <input type="text" name="icon_eyes[]" value="<?= $row['icon_eyes']; ?>">
                        </td>

                        <td width="10%">
                            <input type="text" name="icon_gh[]" value="<?= $row['icon_gh']; ?>">
                        </td>

                        <td width="10%">
                            <input type="text" name="link_eyes[]" value="<?= $row['link_eyes']; ?>">
                        </td>

                        <td width="10%">
                            <input type="text" name="link_gh[]" value="<?= $row['link_gh']; ?>">
                        </td>
                        
                        <td width="2%">
                            <input type="text" name="rank[]" value="<?= $row['rank']; ?>" style="width:30px">
                        </td>
                  
                        <td width="4%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td width="4%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload.php?do=<?= $DB->table; ?>&id=<?= $row['id']; ?>&#39;)" value="更新圖片">
                        </td>
                    </tr>
                <?php
            }
                ?>
            </tbody>
        </table>  -->