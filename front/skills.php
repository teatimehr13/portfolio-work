<div class="container-fluid text-center" id="skills" style="padding: 80px 0px;">
    <h1 class="mb-5 text-golden">
        
    <?php if(empty($Skills->find(['sh' => '1'])['titles'])){
                        echo "";
        }else{
    ?>
        <?= $Skills->find(['sh' => '1'])['titles']; ?>
        <?php
        } 
        ?>

</h1>
    <div class="row skillsIcon mx-5 justify-content-between">

        <div class="col-md-4 align-self-md-center">
        <i class="<?= $Skills->find(['sh' => 1 , 'position' =>'left'])['icon']; ?>"></i>
            <!-- <i class="fab fa-html5"></i> -->
        </div>

        <div class="col-md-4 py-0 my-0">
            <!-- <i class="fab fa-php"></i><br> -->
            <i class="<?= $Skills->find(['sh' => 1 , 'position' =>'top'])['icon']; ?> top"></i><br>
            <i class="<?= $Skills->find(['sh' => 1 , 'position' =>'bottom'])['icon']; ?>"></i>
            <!-- <i class="fab fa-js-square"></i> -->
        </div>

        <div class="col-md-4 align-self-md-center">
            <i class="<?= $Skills->find(['sh' => 1 ,'position' =>'right'])['icon']; ?>"></i>
            <!-- <i class="fab fa-css3-alt"></i> -->
        </div>

    </div>


    <div class="skillsContent">
        <?php
        $skills = $Skills->all(" where `sh`=1");
        foreach ($skills as $skill) {
        ?>
            <span class="<?= $skill['class']; ?>"><?= $skill['text']; ?></span>
        <?php
        }
        ?>
    </div>
</div>


<!-- <div class="skillsContent">
            <span class="phpContent">使用PHP串接SQL可將資料放在伺服器端進行驗證或讀取，避免資料的暴露或被攻擊。</span>
            <span class="jsContent">JS在商業上可搭配GTM設定滑鼠停留事件(onmouseover)追蹤，紀錄使用者停留在特定網頁時間長度;
                或使用滑鼠點擊事件紀錄商品被點擊的次數。</span>
            <span class="htmlContent">HTML5支援影音檔的播放及新的網頁區塊標籤，讓電腦更容易辨認網頁架構藉此提高搜尋引擎排名。</span>
            <span class="cssContent">CSS3新增了文字陰影、盒子模型、漸變及偽元素等讓網頁呈現方式更加多樣化的新選擇器。</span>
        </div> -->