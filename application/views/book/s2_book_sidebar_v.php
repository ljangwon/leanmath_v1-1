<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/leanmath/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LeanMath<sup>2</sup></div>
      </a>
      <?php
      $weekString = array("일", "월", "화", "수", "목", "금", "토");
      ?>
      <div class="fw-bold text-center text-white">
        Today : (<?= date("Y-m-d", time()) ?> <?= $weekString[date('w')] ?>)</div>
      <div class="fw-bold text-center text-white">
        Book_ID : <?= $this->session->userdata('book_id') ?> </div>
      <!-- Divider -->
      <hr class="sidebar-divider my-3">

      <!-- Heading -->
      <div class="sidebar-heading">
        즐겨찾기
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/dashboard") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>대시보드 - 옛날</span>
        </a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/student2") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>전체 학생목록</span>
        </a>
      </li>

      <!-- Nav Item - 수납현황 -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/payment2") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>학생 수납현황</span>
        </a>
      </li>

      <!-- Nav Item - 교재현황 -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/book") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>교재 현황</span>
        </a>
      </li>

      <!-- Nav Item - 교재 excel -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/home") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>교재 마스터 - 엑셀 </span>
        </a>
      </li>

      <!-- Nav Item - 교재 단원 excel -->
      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/home2") ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>교재 단원 - 엑셀</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        교재목록
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>초등교재 목록 </span>
        </a>
        <div id="collapse2-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book List:</h6>
            <?php
            foreach ($books as $entry) {
              if (
                $entry->status == '사용' &&
                $entry->grade1 == '초등'
              ) {
            ?>
                <a class="collapse-item" href="<?= site_url('/book/get_book/') ?>/<?= $entry->id ?>"><?= $entry->title ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->status ?> </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2-3" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>중등교재 목록</span>
        </a>
        <div id="collapse2-3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book List:</h6>
            <?php
            foreach ($books as $entry) {
              if (
                $entry->status == '사용' &&
                $entry->grade1 == '중등'
              ) {
            ?>
                <a class="collapse-item" href="<?= site_url('/book/get_book/') ?>/<?= $entry->id ?>"><?= $entry->title ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->status ?> </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2-4" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>고등교재 목록</span>
        </a>
        <div id="collapse2-4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book List:</h6>
            <?php
            foreach ($books as $entry) {
              if (
                $entry->status == '사용' &&
                $entry->grade1 == '고등'
              ) {
            ?>
                <a class="collapse-item" href="<?= site_url('/book/get_book/') ?>/<?= $entry->id ?>"><?= $entry->title ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->status ?> </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2-5" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>전체 교재명단 </span>
        </a>
        <div id="collapse2-5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book List:</h6>
            <?php
            foreach ($books as $entry) {
              if (
                $entry->status == '사용'
              ) {
            ?>
                <a class="collapse-item" href="<?= site_url('/book/get_book/') ?>/<?= $entry->id ?>"><?= $entry->title ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->status ?> </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->