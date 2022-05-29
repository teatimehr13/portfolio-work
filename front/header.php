<?php
  $title=$Titles->find(['sh'=>1]);
?>

<div class="container_header sticky-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg sticky-top header ">
      <!-- <a class="navbar-brand" href="index.php">Herny's House</a> -->
      <a class="navbar-brand" href="index.php"><img src="../img/<?=$title['img']?>" width="120px"></a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#me">ABOUT ME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#collection">COLLECTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">SKILLS</a>
          </li>
        </ul>
    </nav>
  </div>
</div>