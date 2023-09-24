<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	session_book_id : <?= $this->session->userdata('book_id') ?>

	<!-- section start -->
	<form id="book_info_modify" action="<?= site_url() ?>/book/book_modify" method="post">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<div class="main-title">교재 마스터 </div>
			<div class="btn-toolbar mb-1 mb-md-0">
				<div class="btn-group me-2">
					<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#book_info-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
						접고펴기
					</a>
					<button type="submit" class="btn btn-sm btn-outline-secondary">
						수정
					</button>
					<button type="button" id="btn_book_add" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#book_add">
						교재추가
					</button>
					<button type="button" id="btn_book_del" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#book_del">
						교재삭제
					</button>
				</div>
			</div>
		</div>

		<!-- collapse start -->
		<?php 
			if( $this->session->userdata('book_show') ) 	{
		?>
				<div id="book_info-collapse" class="row collapse.show">
		<?php
			}
			else
			{
		?>
				<div id="book_info-collapse" class="row collapse.show">
		<?php
			}
		?>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label">book_ID</label>
				<input type="text" name="id" class="form-control" value="<?= $book->id ?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label">교재명</label>
				<input type="text" name="name" class="form-control" value="<?= $book->name ?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label text-nowrap">구분1</label>
				<input type="text" name="grade1" class="form-control" value="<?= $book->grade1 ?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label text-nowrap">구분2</label>
				<input type="text" name="grade2" class="form-control" value="<?= $book->grade2 ?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label text-nowrap">수준</label>
				<input type="text" name="level" class="form-control" value="<?= $book->level?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label text-nowrap">단원수</label>
				<input type="text" name="chapter_num" class="form-control" value="<?= $book->chapter_num?>">
			</div>

			<div class="col-sm-2 text-center">
				<label for="" class="form-label text-nowrap">유효</label>
				<input type="text" name="flag" class="form-control" value="<?= $book->flag ?>">
			</div>
			<!-- --------------------------------------- -->
			<div class="col-sm-12 text-center">
				<label class="form-label">메모</label>
				<textarea name="memo" class="form-control text-start" rows="5"><?= $book->memo ?> </textarea>
			</div>
		</div>
	</form>

	<!-- Button trigger modal -->
	<!-- Modal1 -->
	<div class="modal fade" id="book_add" aria-labelledby="book_add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="book_add_Label">추가</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= site_url() ?>/book/book_add" method="post">
						<input type="text" name="grade1" placeholder="학년구분" class="span12" />
						<input type="text" name="grade2" placeholder="학기" class="span12" />
						<input type="text" name="name" placeholder="교재이름" class="span12" />
						<div class="form_control">
							<input class="btn" type="submit" value="추가" />
							<a href="<?= site_url('/book') ?>" class="btn">교재 대시보드</a>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal -->
	<!-- Modal2 -->
	<div class="modal fade" id="book_del" aria-labelledby="book_del" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="book_delete_Label">삭제</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<form action="<?= site_url() ?>/book/book_delete" method="post">
						<input type="hidden" name="book_id" value="<?= $book->id ?>" />
						<div class="form_control">
							정말로 <?= $book->name ?> 을 삭제하시겠습니까?
							<br>
							<input class="btn" type="submit" value="삭제" />
							<a href="<?= site_url('/book') ?>" class="btn">대시보드</a>
						</div>
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			
			</div>

		</div>
	</div>
	<!-- collapse end -->
	<!-- section end -->

	<!-- 단원 화면 start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="입력">
			단원 정보 입력 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#chapter-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/book/chapter_add/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가
				</button>
				<button type="button" onclick="location.href='<?= site_url('/book/chapter_add3/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가3
				</button>
				<button type="button" onclick="location.href='<?= site_url('/book/chapter_add6/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가6
				</button>
				<button type="button" onclick="location.href='<?= site_url('/book/chapter_add9/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가9
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="chapter-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr class="flex-nowrap">
						<th class="text-center text-nowrap">번호</th>
						<th class="text-center text-nowrap">수정/삭제</th>
						<th class="text-center text-nowrap">단원번호</th>
						<th class="text-center text-nowrap">단원명</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($chapters as $entry) {
						if (
							true
						) {
					?>
							<form id="chapter_<?= $seq ?>" action="<?= site_url('book/chapter_modify') ?>" method="post">
								<tr class="flex-nowrap">
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="book_id" value="<?= $entry->book_id ?>">

									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle">
										<div class="d-inline-flex"><input type="submit" class="text-center" value="수정">
										/<input type="button" onclick="location.href='<?= site_url('/book/chapter_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="text-left align-middle"> <input type="text" name="num" size=3 class="text-center" value="<?= $entry->num ?>"></td>
									<td class="text-left align-middle"> <input type="text" name="name" placeholder="교재명" size=50 class="text-left" value="<?= $entry->name ?>"></td>
								</tr>
							</form>
					<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- collapse end -->
	<!-- section end -->

</main>