<div class="text-center" id="collection" style="padding: 80px 0px ;">

        <h1 class="mb-5 text-golden">

        <?= $Collection->find(['sh' => '1'])['titles']; ?>

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
            <a href="<?=$collection['link_eyes'];?>"><img src="./img/<?=$collection['img'];?>" class="img-fluid py-3"></a>
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



    