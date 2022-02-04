<h3>新增SKILLS</h3>
<hr>
<form action="api/add.php?do=<?= $_GET['table']; ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>ICON：</td>
            <td>
                <input type="text" name="icon" cols="30" rows="5">
            </td>
        </tr>

        <tr>
            <td>CLASS：</td>
            <td>
                <textarea name="class" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>SKILLS文字：</td>
            <td>
                <textarea name="text" cols="30" rows="10"></textarea>
            </td>
        </tr>

        <td>
      

    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>