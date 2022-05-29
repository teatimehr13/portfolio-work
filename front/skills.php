<!-- <div class="container-fluid text-center" id="skills" style="padding: 80px 0px;">
    <h1 class="mb-5 text-golden">
        <?= $Skills->find(['sh' => '1'])['titles']; ?>


</h1>
    <div class="row skillsIcon mx-5 justify-content-between">

        <div class="col-md-4 align-self-md-center">
        <i class="<?= $Skills->find(['sh' => 1, 'position' => 'left'])['icon']; ?>"></i>
        </div>

        <div class="col-md-4 py-0 my-0">
            <i class="<?= $Skills->find(['sh' => 1, 'position' => 'top'])['icon']; ?> top"></i><br>
            <i class="<?= $Skills->find(['sh' => 1, 'position' => 'bottom'])['icon']; ?>"></i>>
        </div>

        <div class="col-md-4 align-self-md-center">
            <i class="<?= $Skills->find(['sh' => 1, 'position' => 'right'])['icon']; ?>"></i>
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
</div> -->

<div class="container my-5 pt-5" id="skills">
    <div class="py-4 text-center">
        <span class="skillsLine"></span>
        <span class="topic">
            <?= $Skills->find(['sh' => '1'])['titles']; ?>
        </span>
        <span class="skillsLine"></span>
    </div>

    <div class="row icon">
        <div class="col-md-4"><i class="fa-brands fa-html5"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-css3-alt"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-js-square"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-bootstrap"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-php"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-laravel"></i></div>
        <div class="col-md-4"><i class="fa-solid fa-database"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-git-square"></i></div>
        <div class="col-md-4"><i class="fa-brands fa-figma"></i></div>
    </div>
</div>