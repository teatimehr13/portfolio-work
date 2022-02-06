<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <form method="post" action="api/edit.php?do=<?= $DB->table; ?>">
    <!-- <p class="t cent botli"><?= $DB->title; ?></p> -->

    <div class="cent">

    <input class="text-center my-2" type="text" name="titles[]" style="height:30px; width:130px ; background:white" 
  <?php if(empty($Skills->find(['sh' => '1'])['titles'])){
                        echo "";
        }else{
    ?>
        value="<?= $Skills->find(['sh' => '1'])['titles']; ?>" > 管理
        <?php
        } 
        ?>

    </div>


    <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="10%">ICON</td>
                    <td width="10%">位置</td>
                    <td width="10%">修改ICON</td>
                    <td width="20%"><?= $DB->class; ?></td>
                    <td width="40%"><?= $DB->text; ?></td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="10%"></td>

                </tr>
                <?php
                $all = $DB->math('count', '*');
                $div = 4;
                $pages = ceil($all / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;

                $rows = $DB->all(" limit $start,$div");
                foreach ($rows as $row) {
                    $checked = ($row['sh'] == 1) ? 'checked' : '';
                ?>
                    <tr style="text-align: center;">

                        <!-- <td>
                            <input type="text" name="icon[]" style="height:30px" value="<?= $row['icon']; ?>" readonly>
                        </td> -->

                        <td>
                            <i class="<?= $row['icon']; ?>" style="font-size: 50px;"></i>
                        </td>

                        <?php
                        $options = $row['position'];
                        ?>

                        <td width="10%">
                            <select name="position[]" style="height:41px;width:70px">
                                <option value="">Please Select Option</option>
                                <option value="left" <?php if ($options == "left") echo 'selected="selected"'; ?>>left</option>
                                <option value="right" <?php if ($options == "right") echo 'selected="selected"'; ?>>right</option>
                                <option value="top" <?php if ($options == "top") echo 'selected="selected"'; ?>>top</option>
                                <option value="bottom" <?php if ($options == "bottom") echo 'selected="selected"'; ?>>bottom</option>
                            </select>
                        </td>

                        <td>
                            <input type="text" name="icon[]" style="height:30px; width:130px" value="<?= $row['icon']; ?>">
                        </td>

                        <td>
                            <input type="text" name="class[]" style="height:30px ;width:130px" value="<?= $row['class']; ?>" readonly>
                        </td>
                        <td>
                            <textarea name="text[]" style="width:95%;height:60px"><?= $row['text']; ?></textarea>
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">

                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        </td>

                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if (($now - 1) > 0) {
                $p = $now - 1;
                echo "<a href='?do={$DB->table}&p=$p'> &lt; </a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                if ($i == $now) {
                    $fontsize = "24px";
                } else {
                    $fontsize = "16px";
                }
                echo "<a href='?do={$DB->table}&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if (($now + 1) <= $pages) {
                $p = $now + 1;
                echo "<a href='?do={$DB->table}&p=$p'> &gt; </a>";
            }
            ?>
        </div>
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