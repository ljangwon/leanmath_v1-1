<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

	<div class="container mt-3">
		<h2 data-toggle="tooltip" title="교재 등록정보 현황">교재 정보 등록 현황 </h2>
		<p>Click on the Tabs to display the active and previous tab.</p>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#total">전체</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#menu1">초등</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#menu2">중등</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#menu3">고등</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content border mb-3">

			<div id="total" class="container tab-pane active"><br>
				<h3> 전체 교재 등록 현황 </h3>

				<p>초4 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>초5 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>초6 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p class="d-inline"> 초등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?></div> 권</p>
				<hr>
				<p>중1 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>중2 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>중3 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p class="d-inline"> 중등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?></div> 권</p>
				<hr>

				<p>고1 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>고2 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>고3 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p class="d-inline"> 중등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?> </div> 권</p>
				<hr>
			</div>

			<div id="menu1" class="container tab-pane fade"><br>
				<h3>초등 교재 등록 현황 </h3>

				<p>초4 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>초5 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>초6 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p class="d-inline"> 초등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?></div> 권</p>
				<hr>
			</div>

			<div id="menu2" class="container tab-pane fade"><br>
				<h3>중등 교재 등록 현황</h3>
				<p>중1 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>중2 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p>중3 : <?= $book_count_m1_1->cnt ?> 권 </p>
				<p class="d-inline"> 중등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?></div> 권</p>
				<hr>
			</div>

			<div id="menu3" class="container tab-pane fade"><br>
				<h3>고등 교재 등록 현황</h3>
				<p>고1 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>고2 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p>고3 : <?= $book_count_m1_1->cnt ?>권 </p>
				<p class="d-inline"> 중등 전체 :
				<div class="d-inline text-primary"> <?= $book_count_m1_1->cnt ?> </div> 권</p>
				<hr>
			</div>

		</div>

		<p class="act"><b>Active Tab</b>: <span></span></p>
		<p class="prev"><b>Previous Tab</b>: <span></span></p>
	</div>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="http://localhost/lmath/static/la.jpeg" alt="Los Angeles" width="1100" height="500">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="http://localhost/lmath/static/chicago.jpeg" alt="Los Angeles" width="1100" height="500">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="http://localhost/lmath/static/ny.jpeg" alt="Los Angeles" width="1100" height="500">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

</main>