<nav class="navbar-cover">
  <div class="navbar-top d-inline-flex justify-content-between align-items-center">
    <div class="toggle-menu">
      <button id="mainMenuCollapse" class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <a href="sport.php" class="nav-text mx-auto">스포츠</a>

    <div class="nav-top-center">
      <a href="homepage.php" class="navbar-logo">
        <img src="../assets/img/mobile-logo.png" alt="mybet Logo">
      </a>
    </div>

    <a href="#!" class="nav-text mx-auto">배팅내역</a>

    <div class="nav-basket">
      <a href="betting-cart.php">
        <span class="basket-icon">
          <img class="svg-icon" src="../assets/img/shopping-cart.svg" alt="shoping cart">
        </span>
        <span class="basket-number kartika">12</span>
      </a>
    </div>
  </div>

  <?php
  if ($showBalanceMenu == true) {

      // show balance menu if logged in
      include 'navbar-balance.php';

  } else {
    // nothing to show
  }
  ?>

</nav>
