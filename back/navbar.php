<nav class="navbar navbar-expand-lg sticky-top" style="background: url('./img/bg.png');">
  <a class="navbar-brand">後台管理區</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="drop-down ml-auto ">
    <i class="fa-solid fa-caret-down"></i>
  </div>

  <div class="down-content">
    <ul>
      <li><a href="index.php"><i class="fa-solid fa-window-maximize"></i>前台</a></li>
      <li><a href="#" onclick="logout()"><i class="fa-solid fa-arrow-right-from-bracket"></i>登出</a></li>
    </ul>
  </div>
</nav>



<script>
  function logout() {
    confirms = '確定要登出嗎?';
    if (confirm(confirms) == true) {
      $.post('api/logout.php', () => {
        location.href='index.php';
      })
    }
  }
</script>