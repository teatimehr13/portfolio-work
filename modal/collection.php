<h3>新增COLLECTION</h3>
<hr>
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">
<table>
        <tr>
            <td>標題區圖片：</td>
            <td><input type="file" name="img" ></td>
        </tr>
        <tr>
            <td>標題區替代文字：</td>
            <td><input type="text" name="text" ></td>
        </tr>
        <tr>
            <td>分類：</td>
            <td><input type="text" name="category" ></td>
        </tr>
        <tr>
            <td>符號眼睛：</td>
            <td><input type="text" name="icon_eyes" ></td>
        </tr>
        <tr>
            <td>符號gh：</td>
            <td><input type="text" name="icon_gh" ></td>
        </tr>
        <tr>
            <td>連結眼睛：</td>
            <td><input type="text" name="link_eyes" ></td>
        </tr>
        <tr>
            <td>連結gh：</td>
            <td><input type="text" name="link_gh" ></td>
        </tr>
    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>