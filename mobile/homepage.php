<?php
$page_title = "Homepage";
include 'layout/header.php'; ?>

<?php
$showBalanceMenu = true;
include 'layout/navbar.php'; ?>

<div class="page-content homepage">

  <div class="hometabs-cover">

    <nav class="nav nav-justified home-tabs" role="tablist">
      <a class="nav-item nav-link active" data-toggle="tab" href="#sportTab" role="tab" aria-selected="true">스포츠</a>
      <a class="nav-item nav-link" data-toggle="tab" href="#liveTab" role="tab" aria-selected="false">라이브</a>
    </nav>

    <div class="tab-content">
      <div class="sport-tab tab-pane fade show active" id="sportTab">
        <div class="sport-carousel owl-carousel">
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/soccer-ball-icon.svg" alt="soccer">
              </span>
              축구
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/basket-ball-icon.svg" alt="basketball">
              </span>
              야구
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/baseball-icon.svg" alt="baseball">
              </span>
              농구
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/volley-ball-icon.svg" alt="volleyball">
              </span>
              축구
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/hockey-disc-icon.svg" alt="hockey">
              </span>
              아이스 하키
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/cup-icon.svg" alt="e-sport">
              </span>
              아이스 하키
            </a>
          </div>
          <div class="item">
            <a href="#!">
              <span class="sport-icon">
                <img src="assets/img/sports/football-icon.svg" alt="football">
              </span>
              배구
            </a>
          </div>
        </div>
      </div>
      <div class="sport-tab coming-soon tab-pane fade" id="liveTab">
        <p class="text-center">라이브 배팅은 준비중입니다.</p>
      </div>
    </div>

  </div>

  <div class="casino-boxes-cover">
    <div class="table-header text-center">
      <span>카지노</span>
    </div>
    <div class="casino-carousel owl-carousel">
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/evolution-gaming.png" alt="evolution gaming">
        </a>
      </div>
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/microgaming.png" alt="micro gaming">
        </a>
      </div>
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/asian-gaming.png" alt="asian gaming">
        </a>
      </div>
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/evolution-gaming.png" alt="evolution gaming">
        </a>
      </div>
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/microgaming.png" alt="micro gaming">
        </a>
      </div>
      <div class="casino-item item">
        <a href="#">
          <img src="assets/img/casino/asian-gaming.png" alt="asian gaming">
        </a>
      </div>
    </div>
  </div>

  <div class="minigame-boxes-cover">
    <div class="table-header text-center">
      <span>미니게임</span>
    </div>
    <div class="minigame-carousel owl-carousel">
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game01.png" alt="">
          미니게임
        </a>
      </div>
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game02.png" alt="">
          미니게임
        </a>
      </div>
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game03.png" alt="">
          미니게임
        </a>
      </div>
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game01.png" alt="">
          미니게임
        </a>
      </div>
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game02.png" alt="">
          미니게임
        </a>
      </div>
      <div class="minigame-item">
        <a href="#">
          <img src="assets/img/minigame/game03.png" alt="">
          미니게임
        </a>
      </div>
    </div>
  </div>

  <div class="bottom-menu-cover">
    <ul class="list-inline d-flex justify-content-between">
      <li class="list-inline-item">
        <a href="balance-transfer.php" class="balance-transfer-btn">
          <span class="sprite-icon"></span>
          <span>밸런스 전환</span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="support-list.php" class="support-btn">
          <span class="sprite-icon"></span>
          <span>고객센터</span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="point-shop.php" class="point-shop-btn">
          <span class="sprite-icon"></span>
          <span>포인트상점</span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="promotion.php" class="promotion-btn">
          <span class="sprite-icon"></span>
          <span>이벤트</span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="notice-list.php" class="notice-btn">
          <span class="sprite-icon"></span>
          <span>공지사항</span>
        </a>
      </li>
    </ul>
  </div>

  <footer class="footer">
    <div class="logo-center text-center mb-3">
      <img src="assets/img/footer-logo.png" alt="bumper logo">
    </div>
    <p class="text-center small">BUMPER Sports & Casino & MiniGame</p>
    <p class="text-center small">Copyright © 2018 BUMPER Inc. Hong Kong Ltd. All rights reserved.</p>
  </footer>

</div>

<?php include 'layout/main-menu.php'; ?>

<?php include 'layout/balance-menu.php'; ?>

<?php include 'layout/footer.php'; ?>
