<div style="width:99%; margin:auto; overflow:auto;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post"  action="./api/bottom.php">
        <table width="100%" style="margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="20%">頁尾版權資料:</td>
                    <td width="80%">
                        <input style="width:100%" type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                            
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>