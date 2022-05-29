<div class="container pt-5" id="me">

    <div class="py-4 text-center">
    <span class="meLine"></span>
        <span class="topic">
            <?= $Me->find(['sh' => '1'])['titles']; ?>
        </span>
        <span class="meLine"></span>
    </div>

    <div class="row">
        <div class="col-md-6" >
                <div class="item justify-content-center d-flex">
                    <div class="col-md-8"><img src=" ./img/<?= $Me->find(['sh' => '1'])['img']; ?>" class="img-fluid"></div>
                </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="col-md-10">
            <?php
            $mes = $Me->all(" where `sh`=1 ORDER BY rank");
            foreach ($mes as $me) {
                echo "<div class='text-left meText' style='max-width:418px'>{$me['text']}</div>";
            }
            ?>
            </div>
        </div>
    </div>
</div>
</div>