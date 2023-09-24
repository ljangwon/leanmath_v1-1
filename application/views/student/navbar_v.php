<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="" href="<?= site_url() ?>/student/list_today">Today학생리스트</a>
			<a class="" href="<?= site_url() ?>/student/lists">전체학생리스트</a>
			<a class="" href="<?= site_url() ?>/student">전체현황</a>
			<a class="" href="<?= site_url() ?>/grid">임시화면1</a>
			<a class="" href="<?= site_url() ?>/grid2">임시화면2</a>
			<a class="" href="<?= site_url() ?>/grid3">임시화면3</a>
			<a class="" href="<?= site_url() ?>/grid4">임시화면4</a>
			<a class="" href="<?= site_url() ?>/grid5">임시화면5</a>

			<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<?php
					if ($this->session->userdata('is_login')) {
					?>
						<li> 환영합니다. <?= $this->session->userdata('name') ?>님,
							현재 id =<?= $this->session->userdata('student_id') ?></li>
						<li><a href="<?= site_url() ?>/auth/logout">로그아웃</a></li>
					<?php
					} else {
					?>
						<li><a href="<?= site_url() ?>/auth/login">로그인</a></li>
						<li><a href="<?= site_url() ?>/auth/register">회원가입</a></li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">