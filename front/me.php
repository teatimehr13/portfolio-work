<div class="container pt-5">

    <div class="py-4">
        <span class="text-golden topic text-right">
            <?= $Me->find(['sh' => '1'])['titles']; ?>
        </span>
        <span class="meLine"></span>
    </div>

    <div class="row">
        <div class="col-md-6" >
            <!-- <div class="row"> -->
                <div class="item justify-content-center d-flex">
                    <div class="col-md-8"><img src=" ./img/<?= $Me->find(['sh' => '1'])['img']; ?>" class="img-fluid"></div>
                </div>
                <!-- <div class="col-md-1 mx-0 px-0 meButton">
                    <button><i class="fas fa-arrow-right fa-2x right"></i></button>
                    <button><i class="fas fa-arrow-left fa-2x left"></i></button>
                </div> -->
            <!-- </div> -->
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="col-md-10">
            <?php
            $mes = $Me->all(" where `sh`=1 ORDER BY rank");
            foreach ($mes as $me) {
                echo "<div class='text-left meText'>{$me['text']}</div>";
            }
            ?>
            </div>
        </div>
    </div>
</div>
</div>