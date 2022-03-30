<button id="menuBtn"><i class="fas fa-bars fa-2x"></i></button>
<div class="asdieNav">
    <button id="asideCloseBtn"><i class="fas fa-times fa-2x"></i></button>
    <nav>
        <a href="index.php">HOME</a>
        <a href="#introduceME">INTRODUCE</a>
        <a href="#collection">COLLECTION</a>
        <a href="#skills">SKILLS</a>
    </nav>
</div>

<!--for mobile -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <a class="navbar-brand" href="index.php"><img src="./img/<?= $Titles->find(['sh' => 1])['img']; ?>" style="width: 100px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fas fa-bars" style="color: white;"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#introduceME">INTRODUCE</a>
      <a class="nav-link" href="#collection">COLLECTION</a>
      <a class="nav-link" href="#skills">SKILLS</a>
    </div>
  </div>
</nav>