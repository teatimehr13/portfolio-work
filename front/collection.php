<div class="text-center" id="collection" style="padding: 80px 0px ;">

        <h1 class="mb-5 text-golden">
        <?php if(empty($Collection->find(['sh' => '1'])['titles'])){
                        echo "";
        }else{
    ?>
        <?= $Collection->find(['sh' => '1'])['titles']; ?>
        <?php
        } 
        ?>
        </h1>
        
        <button class="all-btn btn btn-outline-yellow">ALL</button>
        <button class="f2n-btn all-btn btn btn-outline-yellow">F2N</button>
        <button class="b2n-btn all-btn btn btn-outline-yellow">B2N</button>
        <button class="others-btn all-btn btn btn-outline-yellow">OTHERS</button>
</div>


<div class="container-fluid custom-gutters;" style="min-height: 500px;">
<div class="row px-2 px-md-5 collection-row">
<?php
    $collections = $Collection->all(" where `sh`=1 Order By `rank` ASC");
    foreach($collections as $collection){
?>

<div class="collection col-5 col-md-3 all mb-5 text-center text-light mx-2 <?=$collection['sort'];?>">
        <div class="collection_card mb-3">
            <a href="<?=$collection['link_eyes'];?>"><img src="../img/<?=$collection['img'];?>" class="img-fluid py-3"></a>
        </div>
        <h4><?=$collection['text'];?></h4>
        <p><?=$collection['category'];?></p>
                <div class="collection_atag">
                    <a href="<?=$collection['link_eyes'];?>"><i class="<?=$collection['icon_eyes'];?>"></i></a>
                    <?php if(empty($collection['icon_gh'])){
                        echo "";
                        }else{?>
                     <a href="<?=$collection['link_gh'];?>"><i class="<?=$collection['icon_gh'];?>"></i></a>
                        <?php
                     } 
                     ?>
                        
                </div>
            </div>
    <?php } ?>

</div>
</div>

    <!-- <div class="container-fluid custom-gutters;" style="min-height: 500px;">
        <div class="row px-2 px-md-5 collection-row">
            <div class="collection col-6 col-md-3 all b2n mb-5 text-center text-light mx-2">
                <div class="collection_card mb-3">
                    <a href="*"><img src="./img/cal01.png" class="img-fluid py-3"></a>
                </div>
                <h4>Calendar</h4>
                <p>PHP</p>
                <div class="collection_atag">
                    <a href="http://220.128.133.15/s1100410/calendarr/index.php?year=2021&month=01"><i
                            class="far fa-eye"></i></a>
                    <a href="https://github.com/teatimehr13/calendar"><i class="fab fa-github"></i></a>
                </div>
            </div> -->
            <!--- 分隔待刪 -->

            <!-- <div class="collection col-6 col-md-3 all b2n mb-5 text-center text-light mx-2">

                <div class="collection_card mb-3">
                    <a href="*"><img src="./img/sv01-1.png" class="img-fluid py-3"></a>
                </div>
                <h4>Polling Website</h4>
                <p>PHP</p>
                <div class="collection_atag">
                    <a href="http://220.128.133.15/s1100410/hello/"><i class="far fa-eye"></i></a>
                    <a href="https://github.com/teatimehr13/survey"><i class="fab fa-github"></i></a>
                </div>

            </div> -->

            <!--- 分隔待刪3 -->
<!-- 
            <div class="collection col-6 col-md-3 all f2n mb-5 text-center text-light mx-2">

                <div class="collection_card mb-3">
                    <a href="*"><img src="./img/tc01.jpg" class="img-fluid py-3"></a>
                </div>
                <h4>Calendar</h4>
                <p>PHOTOSHOP</p>
                <div class="collection_atag">
                    <a href="img/tiger calendar 01.jpg"><i class="far fa-eye"></i></a>
                </div>

            </div> -->

            <!--- 分隔待刪4 -->

            <!-- <div class="collection col-6 col-md-3 all f2n mb-5 text-center text-light mx-2">

                <div class="collection_card mb-3">
                    <a href="*"><img src="./img/pm01.png" class="img-fluid py-3"
                            style="width:100%;max-height:295px"></a>
                </div>
                <h4>Banner</h4>
                <p>PHOTOSHOP</p>
                <div class="collection_atag">
                    <a href="img/promo01.png"><i class="far fa-eye"></i></a>
                </div>

            </div>

        </div>
    </div> -->


    