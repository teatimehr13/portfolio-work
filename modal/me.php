<h3>新增ME</h3>
<hr>
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">
<table>
        <tr>
            <td>ME圖片：</td>
            <td><input type="file" name="img" ></td>
        </tr>
        <tr>
            <td>自我介紹：</td>
            <td><textarea name="text" ></textarea></td>
        </tr>
    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>