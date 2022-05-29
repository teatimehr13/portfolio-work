<div class="container ">

<h2 class="my-3">新增COLLECTION</h2>

<form action="api/edit_col.php?do=edit_col" method="post" enctype="multipart/form-data">
    <!-- <table style="background-color: rgba(235, 235, 235);"> -->


        <div class="form-group">
           <label for="img">作品圖 : </label> </td>
           <input type="file" name="img" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="text">作品名稱 : </label>
            <input type="text" name="text" class="form-control">
        </div>
        <div class="form-group">
           <label for="category">種類 : </label>
           <input type="text" name="category" id="category" class="form-control">
        </div>
        <div class="form-group">
            <label for="sort">分類 : </label>
                <select name="sort" class="form-control">
                    <option value="">--請選擇分類--</option>
                    <option value="前端">前端</option>
                    <option value="後端">後端</option>
                    <option value="其他">其他</option>
                </select>
        </div>
        <div class="form-group">
            <td><label for="icon_eyes">圖示 : </label></td>
            <select name="icon_eyes" class="form-control">
                <option value="fas fa-search">search</option>
            </select>

        </div>
        <!-- <div class="form-group">
            <label for="icon_eyes">圖示 : </label>
            <input type="text" name="icon_eyes" id="icon_eyes" class="form-control">
        </div> -->
        <!-- <div class="form-group">
            <label for="icon_gh">圖示(gh) : </label>
            <input type="text" name="icon_gh" id="icon_gh" class="form-control"> 
        </div> -->
        <div class="form-group">
            <label for="link_eyes">連結 : </label>
            <input type="text" name="link_eyes" id="link_eyes" class="form-control"> 
        </div>
        <!-- <div class="form-group">
            <label for="link_gh">連結(gh) : </label>
            <input type="text" name="link_gh" id="link_gh" class="form-control"> 
        </div> -->
        <div class="form-group">
            <label for="rank">順序 : </label>
            <input type="text" name="rank" id="rank" class="form-control"> 
        </div>
        <div class="form-group">
            <td class="py-3"><button type="submit" class="btn btn-info btn-sm">確定修改</button></td>
            <td><button type="button" class="btn btn-secondary btn-sm" onclick="location.href='back2.php?do=collection'">返回上一頁</button></td>
        </div>
        <!-- <input type="hidden" name="id" value="<?= $row['id']; ?>"> -->
        
        </form>
    </div>