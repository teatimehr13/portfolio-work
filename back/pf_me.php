<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $DB->title; ?></p>
    <form method="post" action="api/edit.php?do=<?= $DB->table; ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="20%">圖片</td>
                    <td width="23%">文字</td>
                    <td width="10%">順序</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                    $checked = ($row['sh'] == 1) ? 'checked' : '';
                ?>
                    <tr class="text-center">
                        <td width="20%">
                            <?php if (empty($row['img'])) {
                                echo "<img src='https://fakeimg.pl/120x100/?text=TEXT ONLY'>";
                            } else { ?>
                                <img src="./img/<?= $row['img']; ?>" style="width:120px;height:100px">
                            <?php
                            }
                            ?>
                        </td>

                        <!-- <td width="20%">
                        <img src="./img/<?= $row['img']; ?>" style="width:120px;height:100px">
                    </td> -->
                        <td width="23%">
                            <textarea name="text[]"><?= $row['text']; ?></textarea>
                        </td>

                        <td width="10%">
                            <input type="text" name="ordered[]" value="<?= $row['ordered']; ?>" style="width: 50px;">
                        </td>

                        <td width="7%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td width="7%">
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