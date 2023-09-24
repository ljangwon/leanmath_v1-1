<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/leanmath">LeanMath</a>

  <div class="navbar-brand col ml-5 dropdown">
    <a href="#" class="link-light text-decoration-none dropdown-toggle" id="dropdown2-2" data-bs-toggle="dropdown" aria-expanded="false">
      학생메뉴
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown2-2">
      <li><a class="dropdown-item" href="<?= site_url('/dashboard/st_add') ?>"> 학생 등록</a></li>
      <li><a class="dropdown-item" href="<?= site_url('/dashboard/st_summary') ?>">학생 현황</a></li>
      <li><a class="dropdown-item" href="<?= site_url('/payment') ?>">학생 수납현황</a></li>
      <li><a class="dropdown-item" href="<?= site_url('/dashboard') ?>"> Dashboard </a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="<?= site_url('/dashboard/study_get') ?>">학습진도체크 전체목록</a></li>
      <li><a class="dropdown-item" href="<?= site_url('/dashboard/test_get') ?>">테스트 전체목록</a></li>
      <li><a class="dropdown-item" href="<?= site_url('/book') ?>">교재 전체목록</a></li>

    </ul>

  </div>

  <div class="navbar-brand col dropdown">
    <a href="#" class="link-light text-decoration-none dropdown-toggle" id="fi_menu" data-bs-toggle="dropdown" aria-expanded="false">
      자산관리
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="fi_menu">
      <li><a class="dropdown-item" href="<?= site_url('/fi') ?>"> finance 메뉴 </a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Menu1</a></li>
    </ul>
  </div>

  <div class="navbar-brand col dropdown">
    <a href="#" class="link-light text-decoration-none dropdown-toggle" id="dropdown2-1" data-bs-toggle="dropdown" aria-expanded="false">
      환경설정
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown2-1">
      <li><a class="dropdown-item" href="<?= site_url('/dashboard/setting_get') ?>"> 환경세팅 </a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">코드설정</a></li>
    </ul>
  </div>

  <div class="navbar-brand col dropdown">
    <a href="#" class="link-light text-decoration-none dropdown-toggle" id="other_menu" data-bs-toggle="dropdown" aria-expanded="false">
      다른 사이트
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="other_menu">
      <li><a class="dropdown-item" href="<?= site_url('/dashboard') ?>"> 학생관리 </a></li>
      <li><a class="dropdown-item" href="<?= site_url('/book') ?>"> 교재관리 </a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="<?= site_url('/fi') ?>"> 재무관리 </a></li>
    </ul>
  </div>

  <div class="navbar-brand col dropdown">
    <a href="#" class="link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      로그인관리
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="<?= site_url() ?>/auth/login">로그인</a></li>
      <li><a class="dropdown-item" href="<?= site_url() ?>/auth/logout">로그아웃</a></li>
      <li><a class="dropdown-item" href="<?= site_url() ?>/auth/register">회원가입</a></li>
    </ul>
  </div>

  <div class="col"> </div>

  <button class="navbar-toggler col ml-5 d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>


</header>

<!-- header 가 끝나면 아래에 컨텐츠(nav + main)가 시작된다.  -->
<div class="container-fluid">
  <div class="row">