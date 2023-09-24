<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <form action='<?= site_url("student2/get_student_post") ?>' method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-6 my-2 my-md-0 mw-200 navbar-search">
        <div class="input-group">
          <label class="col-md-2 col-form-label">이름:</label>
          <input type="text" id="search_st_name" name="search_st_name" class="form-control bg-light border-0 small" placeholder="Search for...">
          <label class="col-md-3 col-form-label">아이디:</label>
          <input type="text" id="search_st_id" name="search_st_id" readonly class="form-control bg-light border-0 small">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">
              <?php
              $this->load->model('student_m');
              $total_count = $this->student_m->get_st_count(
                array(
                  'status' => '재원'
                )
              );
              echo $total_count->cnt;
              ?> </span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              학생 상세 명수
            </h6>
            <?php
            $st_count_e4 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '초등',
                'grade2' => '4'
              )
            );
            $st_count_e5 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '초등',
                'grade2' => '5'
              )
            );
            $st_count_e6 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '초등',
                'grade2' => '6'
              )
            );
            $st_count_e = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '초등',
              )
            );
            $st_fees_sum_e = $this->student_m->get_fees_sum('초등');
            ?>
            <p>초4 : <?= $st_count_e4->cnt ?> 명 </p>
            <p>초5 : <?= $st_count_e5->cnt ?> 명 </p>
            <p>초6 : <?= $st_count_e6->cnt ?> 명 </p>
            <p class="d-inline"> 초등 전체 :
            <div class="d-inline text-primary"> <?= $st_count_e->cnt ?> </div> 명 = 총 <?= number_format($st_fees_sum_e->fees) ?> 원 </P>
            <hr>
            <?php
            $st_count_m1 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '중등',
                'grade2' => '1'
              )
            );
            $st_count_m2 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '중등',
                'grade2' => '2'
              )
            );
            $st_count_m3 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '중등',
                'grade2' => '3'
              )
            );
            $st_count_m = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '중등',
              )
            );
            $st_fees_sum_m = $this->student_m->get_fees_sum('중등');
            ?>
            <p>중1 : <?= $st_count_m1->cnt ?> 명 </p>
            <p>중2 : <?= $st_count_m2->cnt ?> 명 </p>
            <p>중3 : <?= $st_count_m3->cnt ?> 명 </p>
            <p class="d-inline"> 중등 전체 :
            <div class="d-inline text-primary"> <?= $st_count_m->cnt ?> </div> 명 = 총 <?= number_format($st_fees_sum_m->fees) ?> 원 </p>
            <hr>
            <?php
            $st_count_h1 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '고등',
                'grade2' => '1'
              )
            );
            $st_count_h2 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '고등',
                'grade2' => '2'
              )
            );
            $st_count_h3 = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '고등',
                'grade2' => '3'
              )
            );
            $st_count_h = $this->student_m->get_st_count(
              array(
                'status' => '재원',
                'grade1' => '고등',
              )
            );
            $st_fees_sum_h = $this->student_m->get_fees_sum('고등');
            ?>
            <p>고1 : <?= $st_count_h1->cnt ?> 명 </p>
            <p>고2 : <?= $st_count_h2->cnt ?> 명 </p>
            <p>고3 : <?= $st_count_h3->cnt ?> 명 </p>
            <p class="d-inline"> 고등 전체 :
            <div class="d-inline text-primary"> <?= $st_count_h->cnt ?> </div> 명 = 총 <?= number_format($st_fees_sum_h->fees) ?> 원 </p>
            <hr>
            <p class="d-inline"> 전체 인원 :
            <div class="d-inline text-primary"> <?= $st_count_e->cnt + $st_count_m->cnt + $st_count_h->cnt ?></div> 명 </p>
            <p class="d-inline"> 전체 매출 :
            <div class="d-inline text-primary"> <?= number_format($st_fees_sum_e->fees + $st_fees_sum_m->fees + $st_fees_sum_h->fees) ?> </div> 원 </p>

          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src='<?= base_url("admin/img/undraw_profile_1.svg") ?>' alt="...">
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Hi there! I am wondering if you can help me with a
                  problem I've been having.</div>
                <div class="small text-gray-500">Emily Fowler · 58m</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src='<?= base_url("admin/img/undraw_profile_2.svg") ?>' alt="...">
                <div class="status-indicator"></div>
              </div>
              <div>
                <div class="text-truncate">I have the photos that you ordered last month, how
                  would you like them sent to you?</div>
                <div class="small text-gray-500">Jae Chun · 1d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src='<?= base_url("admin/img/undraw_profile_3.svg") ?>' alt="...">
                <div class="status-indicator bg-warning"></div>
              </div>
              <div>
                <div class="text-truncate">Last month's report looks great, I am very happy with
                  the progress so far, keep up the good work!</div>
                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                <div class="status-indicator bg-success"></div>
              </div>
              <div>
                <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                  told me that people say this to all dogs, even if they aren't good...</div>
                <div class="small text-gray-500">Chicken the Dog · 2w</div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $this->session->userdata('name') ?> </span>
            <img class="img-profile rounded-circle" src="<?= base_url('admin/img/undraw_profile.svg') ?>">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= site_url('auth/changePassword') ?>">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              ChangePassword
            </a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- End of Topbar -->