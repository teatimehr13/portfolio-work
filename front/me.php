<div class="container-fluid text-center" style="padding: 80px 0px; " id="introduceME">

    <h1 class="text-golden" style="margin-bottom: 72px;">
    <?php if(empty($Me->find(['sh' => '1'])['title'])){
                        echo "";
        }else{
    ?>
        <?= $Me->find(['sh' => '1'])['title']; ?>
        <?php
        } 
        ?>
    
    
    </h1>


        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src=" ../img/<?= $Me->find(['sh' => '1'])['img']; ?>" class="img-fluid">
                    </div>
                    <!-- <span> Hello this is Henry</span>
                    <span>I graduated from the Chihlee University of Technology with a major in International trade.</span>
                    <span>I am interested in connecting various people and products from different corners of the
                    globe.</span>
                    <span>Currently, I was learning computer programing in the Workforce Development Agency, Ministry of
                    Labor. I will be a good programmer and will keep stepping it up.</span> -->
                    <div class="col-md-1 mx-0 px-0 meButton">
                        <button><i class="fas fa-arrow-right fa-2x right" ></i></button>
                        <button><i class="fas fa-arrow-left fa-2x left"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <!-- <span class="text-white meContent"> Hello this is Henry</span> -->
                <!-- <span class='meContent text-left text-white'> -->
                    <?php 
                    $mes = $Me->all(" where `sh`=1 ORDER BY ordered");
                    foreach($mes as $me){
                        echo "<div class='text-white text-left meContent'>{$me['text']}</div>";
                    
                    }
                    ?>
                <!-- </span> -->
            </div>
        </div>
    </div>
</div>


