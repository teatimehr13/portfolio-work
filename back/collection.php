<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $DB->title; ?></p>
    <form method="post" action="api/edit.php?do=<?= $DB->table; ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="30%">img</td>
                    <td width="10%">title</td>
                    <td width="10%">category</td>
                    <td width="10%">sort</td>
                    <td width="10%">icon_eyes</td>
                    <td width="10%">icon_gh</td>
                    <td width="10%">link_eyes</td>
                    <td width="10%">link_gh</td>
                    <td width="2%">rank</td>
                    <td width="4%">show</td>
                    <td width="4%">del</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                    $checked = ($row['sh'] == 1) ? 'checked' : '';
                ?>
                    <tr>
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
                            <option value="b2n" <?php if($options=="b2n") echo 'selected="selected"'; ?> >b2n</option>
                            <option value="f2n" <?php if($options=="f2n") echo 'selected="selected"'; ?> >f2n</option>
                            <option value="others" <?php if($options=="others") echo 'selected="selected"'; ?> >others</option>
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
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $DB->table; ?>.php?table=<?= $DB->table; ?>&#39;)" value="<?= $DB->button; ?>">
                    </td>
                    <td class="cent">

                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>