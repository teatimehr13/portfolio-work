<div class="container-fluid text-center" style="padding: 80px 0px; " id="introduceME">

    <h1 class="text-golden" style="margin-bottom: 72px;">
        <?= $Me->find(['sh' => '1'])['titles']; ?>

    
    </h1>


        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src=" ./img/<?= $Me->find(['sh' => '1'])['img']; ?>" class="img-fluid">
                    </div>
                    <div class="col-md-1 mx-0 px-0 meButton">
                        <button><i class="fas fa-arrow-right fa-2x right" ></i></button>
                        <button><i class="fas fa-arrow-left fa-2x left"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                    <?php 
                    $mes = $Me->all(" where `sh`=1 ORDER BY rank");
                    foreach($mes as $me){
                        echo "<div class='text-white text-left meContent'>{$me['text']}</div>";
                    
                    }
                    ?>
            </div>
        </div>
    </div>
</div>


