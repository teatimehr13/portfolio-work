<div class="container my-5">

    <div class="text-right pb-4">
        <span class="meLine"></span>
        <span class="text-golden topic">
            <?= $Collection->find(['sh' => '1'])['titles']; ?>
        </span>
    </div>

    <div class="text-right pb-4">
        <select id="col_opt" onchange="sort()" style="width: 80px; height:30px">
            <option value="0">全部</option>
            <?php

            $col_opts = $Collection->all(['sh'=>'1']);
            foreach ($col_opts as $col) {
                if ($col['sort'] != '') {
                    echo "<option value='{$col['id']}'>{$col['sort']}</option>";
                }
            }
            ?>

        </select>
    </div>

    <div class="row">
        <?php
        $collections = $Collection->all(" where `sh`=1 Order By `rank` ASC");
        foreach ($collections as $collection) {
        ?>  
            <!-- data-skills=<?= $collection['sort_num']; ?> -->
            <div class="col-md-6 col-sm-12 col-lg-4 collection" data-skills="<?= $collection['sort_ids']; ?>">
                <!-- <a href="<?= $collection['link_eyes']; ?>"><img src="./img/<?= $collection['img']; ?>" class="img-fluid py-3"></a> -->
                <div class="colImg">
                    <div class="colImgHover img-fluid"></div>
                    <img src="./img/<?= $collection['img']; ?>" class="img-fluid imgPic">
                    <a href="#" class="search"><i class="fas fa-search"></i></a>
                </div>


                <div class="text-dark">
                    <h5><?= $collection['text']; ?></h5>
                    <p><?= $collection['category']; ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    //去除選單中相同的文字
    var found = [];
    $("#col_opt option").each(function() {
        if ($.inArray(this.text, found) != -1) $(this).remove();
        found.push(this.text);
        // alert(found);
    });

    function sort(){
        let sort_id = $("#col_opt").val();
        if(sort_id == '0'){
            $('.collection').show();
        }else{
            let collections = document.querySelectorAll('.collection');
            for(let i=0; i < collections.length; i++){
                if(collections[i].dataset.skills.split(",").includes(sort_id)){
                    collections[i].style.display = "block";
                } else {
                    collections[i].style.display = "none";
                }
            }
    
        }
        // alert(123);
    }
</script>