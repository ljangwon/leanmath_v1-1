<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-auto">
  <div class="position-sticky pt-3">
 
    <div class="fs-5 fw-bolder text-decoration-underline text-center mt-2"> 
    교재리스트 </div>

    <?php
      $book_link = '<?'.'='.' $entry->grade1 ?>(' . '<?' . '= $entry->grade2 ?>)- ' . '<?' . '= $entry->name ?>';
    ?>

    <!-- Sidebar List 1 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav1-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>
      </a>
      <span>전체 교재 리스트 </span>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav1-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">
        
        <?php
        foreach ($books as $entry) {
          if (
            true
          ) {
        ?>

            <li class="nav-item">

            <a class="nav-link" href="<?= site_url('/book/book_get/') ?>/<?= $entry->id ?>">
              <span style="font-size:0.7rem"> <?=$entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->level ?>-<?= $entry->name ?> </a>
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
    <!-- nav list end  -->

    <!-- Sidebar List 2 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#nav2-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>
      </a>
      <span>초등 교재 리스트 </span>
    </h6>

    <!-- collapse wrapping start -->
    <div id="nav2-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2" >

        <?php
        foreach ($books as $entry) {
          if (
              $entry->grade1 == "초등" &&
              $entry->flag == "1"
          ) {
        ?>

            <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/book/book_get/') ?>/<?= $entry->id ?>">
                <span style="font-size:0.7rem"> <?=$entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->level ?>-<?= $entry->name ?>  </a>
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
    <!-- nav list2 end  -->


   <!-- Sidebar List 3 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#standby-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>
      </a>
      <span> 교재 등록 대기 리스트 </span>
    </h6>

    <!-- collapse wrapping start -->
    <div id="standby-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">

        <?php
        foreach ($books as $entry) {
          if (
            $entry->flag== 0
          ) {
        ?>

            <li class="nav-item">

            <a class="nav-link" href="<?= site_url('/book/book_get/') ?>/<?= $entry->id ?>">
              <span style="font-size:0.7rem"> <?=$entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->level ?>-<?= $entry->name ?>  </a>
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
    <!-- nav list end  -->

       <!-- Sidebar List 4 start  -->
    <!-- list Title -->
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <a class="link-secondary" data-bs-toggle="collapse" data-bs-target="#outstudent-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="users"></span>
      </a>
      <span> 삭제 교재 리스트 </span>
    </h6>

    <!-- collapse wrapping start -->
    <div id="outstudent-collapse" class="table-responsive collapse">

      <!-- nav item start -->
      <ul class="nav flex-column mb-2 overflow-auto">

        <?php
        foreach ($books as $entry) {
          if (
              true
          ) {
        ?>

            <li class="nav-item">

            <a class="nav-link" href="<?= site_url('/book/book_get/') ?>/<?= $entry->id ?>">
              <span style="font-size:0.7rem"> <?=$entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->level ?>-<?= $entry->name ?>  </a>
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
    <!-- nav list end  -->
</nav>
