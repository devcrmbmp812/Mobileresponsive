<?php
$page_title = "Sport";
include 'layout/header.php'; ?>

<?php
$showBalanceMenu = true;
include 'layout/navbar.php'; ?>

<div class="page-content sport">

  <div class="hometabs-cover">
    <div class="sport-tab" id="sportTab">
      <div class="sport-carousel owl-carousel">
        <div class="item">
          <a href="#" class="active">
            <span class="sport-icon">
              <img src="assets/img/sports/soccer-ball-icon.svg" alt="soccer">
            </span>
            축구
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/basket-ball-icon.svg" alt="basketball">
            </span>
            야구
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/baseball-icon.svg" alt="baseball">
            </span>
            농구
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/volley-ball-icon.svg" alt="volleyball">
            </span>
            축구
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/hockey-disc-icon.svg" alt="hockey">
            </span>
            아이스 하키
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/cup-icon.svg" alt="e-sport">
            </span>
            아이스 하키
          </a>
        </div>
        <div class="item">
          <a href="#">
            <span class="sport-icon">
              <img src="assets/img/sports/football-icon.svg" alt="football">
            </span>
            배구
          </a>
        </div>
      </div>
    </div>
    <div class="select-league d-flex justify-content-between">
      <span class="league-title">1부 리그만 보여드립니다.</span>
      <div class="league-buttons">
        <a href="#" class="btn btn-inner-white mr-1"><span>1부 리그</span></a>
        <a href="#" class="btn btn-inner-white"><span>전체</span></a>
      </div>
    </div>
  </div>

  <div class="betting-table-cover">
    <div class="table-header d-flex flex-row">
      <span class="sport-icon">
         <img src="assets/img/sports/soccer-ball-icon.svg" alt="soccer">
       </span>
      <span class="country-flag">
         <span class="flag-icon flag-icon-ar"></span>
       </span>
      <span>프리미어 리그</span>
    </div>
    <table border="0" class="table table-sm table-dark betting-table mb-0">
      <colgroup>
        <col span="1" style="width: auto;">
        <col span="1" style="width: 80px;">
        <col span="1" style="width: 80px;">
        <col span="1" style="width: 80px;">
      </colgroup>
      <thead>
        <tr>
          <th class="date text-left" scope="col">2017.12.10 <span class="time">23:00</span></th>
          <th>홈팀</th>
          <th>무승부</th>
          <th>원정팀</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승패 (무승부 시, 적특)</span>
            <span class="tag-injury tag-green">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-plus">
               5.08
             </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
               3.00
             </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-minus">
               5.08
             </a>
          </td>
        </tr>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승무패</span>
            <span class="tag-injury tag-red">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-under">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button not-odd">
                   2.5
           </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-over">
                   5.08
                 </a>
          </td>
        </tr>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승무패</span>
            <span class="tag-injury tag-green">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-under selected">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-over">
                   5.08
                 </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="betting-table-cover">
    <div class="table-header d-flex flex-row">
      <span class="sport-icon">
         <img src="assets/img/sports/soccer-ball-icon.svg" alt="soccer">
       </span>
      <span class="country-flag">
         <span class="flag-icon flag-icon-fr"></span>
       </span>
      <span>프리미어 리그</span>
    </div>
    <table border="0" class="table table-sm table-dark betting-table mb-0">
      <colgroup>
        <col span="1" style="width: auto;">
        <col span="1" style="width: 80px;">
        <col span="1" style="width: 80px;">
        <col span="1" style="width: 80px;">
      </colgroup>
      <thead>
        <tr>
          <th class="date text-left" scope="col">2017.12.10 <span class="time">23:00</span></th>
          <th>홈팀</th>
          <th>무승부</th>
          <th>원정팀</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승패 (무승부 시, 적특)</span>
            <span class="tag-injury tag-green">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
               5.08
             </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
               3.00
             </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
               5.08
             </a>
          </td>
        </tr>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승무패</span>
            <span class="tag-injury tag-red">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-under">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button not-odd">
                   2.5
           </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button odd-over">
                   5.08
                 </a>
          </td>
        </tr>
        <tr class="table-bg">
          <td class="teams">
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="team-name">맨체스터 유나이티드</span>
            <span class="text-small">승무패</span>
            <span class="tag-injury tag-green">연장포함</span>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button selected">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
                   5.08
                 </a>
          </td>
          <td>
            <a href="javascript:void(0);" class="odd-button">
                   5.08
                 </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<?php include 'layout/main-menu.php'; ?>

<?php include 'layout/balance-menu.php'; ?>

<?php include 'layout/footer.php'; ?>
