<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-auto">
  <div class="position-sticky pt-3">
    <?php
    $weekString = array("일", "월", "화", "수", "목", "금", "토");
    ?>
    <div class="fw-bold text-center text-primary"> (<?= date("Y-m-d", time()) ?> <?= $weekString[date('w')] ?>)</div>

    <div class="fs-5 fw-bolder text-decoration-underline text-center  bg-primary text-white mt-2">
      학생명단 </div>

    <!-- Sidebar List 1 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav1-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>오늘 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav1-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->class_day1 == date('w') |
            $entry->class_day2 == date('w') |
            $entry->class_day3 == date('w') &&
            $entry->status == '재원'
          ) {
        ?>

            <li class="nav-item">

              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list1 end  -->

    <!-- Sidebar List 2-1 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav2-1-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>월금 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav2-1-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->class_day1 == '1' &&
            $entry->status == "재원"
          ) {
        ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list2-1 end  -->

    <!-- Sidebar List 2-2 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav2-2-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>화목 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav2-2-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->class_day1 == '2' &&
            $entry->status == "재원"
          ) {
        ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list2-2 end  -->

    <!-- Sidebar List 2-3 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav2-3-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>수토 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav2-3-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->class_day1 == '3' &&
            $entry->status == "재원"
          ) {
        ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list2-3 end  -->


    <!-- Sidebar List 3 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#standby-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>입반 대기 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="standby-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->status == '대기'
          ) {
        ?>

            <li class="nav-item">

              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list3 end  -->

    <!-- Sidebar List 4 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#outstudent-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>

        <span>퇴원 학생 리스트 </span>
      </a>
    </h6>

    <!-- collapse wrapping start -->
    <div id="outstudent-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">

        <?php
        foreach ($students as $entry) {
          if (
            $entry->status == '퇴원'
          ) {
        ?>

            <li class="nav-item">

              <a class="nav-link" href="<?= site_url('/dashboard/dashboard_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?= $entry->name ?>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?></a>
              </span>
              </a>

            </li>

        <?php
          }
        }
        ?>
      </ul>
      <!-- nav-item end  -->

    </div>
    <!-- collapse wrapping end -->
    <!-- nav list4 end  -->
</nav>