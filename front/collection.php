<div class="container my-5">

    <div class="text-right pb-4">
        <span class="meLine"></span>
        <span class="text-golden topic">
            <?= $Collection->find(['sh' => '1'])['titles']; ?>
        </span>
    </div>

    <!-- <p>
        <button class="all-btn btn btn-outline-yellow">ALL</button>
        <button class="f2n-btn all-btn btn btn-outline-yellow">F2N</button>
        <button class="b2n-btn all-btn btn btn-outline-yellow">B2N</button>
        <button class="others-btn all-btn btn btn-outline-yellow">OTHERS</button>
    </p> -->

    <div class="row">
        <?php
        $collections = $Collection->all(" where `sh`=1 Order By `rank` ASC");
        foreach ($collections as $collection) {
        ?>

            <div class="col-md-6 col-sm-12 col-lg-4">
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