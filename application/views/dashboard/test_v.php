<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	session_st_id : <?= $this->session->userdata('st_id') ?>
	student name : <?= $this->session->userdata('st_name') ?>

		<!-- 테스트 화면 start -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="테스트 결과 입력">
			테스트 결과 기록 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#test-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/test_add/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="test-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr class="flex-nowrap">
						<th class="text-center text-nowrap">번호</th>
						<th class="text-center text-nowrap">수정/삭제</th>
						<th class="text-center text-nowrap">시험구분</th>
						<th class="text-center text-nowrap">학년과정</th>
						<th class="text-center text-nowrap">수준</th>
						<th class="text-center text-nowrap">구분1</th>
						<th class="text-center text-nowrap">구분2</th>
						<th class="text-center text-nowrap">구분3</th>
						<th class="text-center text-nowrap">공개</th>
						<th class="text-center text-nowrap">테스트명</th>
						<th class="text-center text-nowrap">정답수</th>
						<th class="text-center text-nowrap">문제수</th>
						<th class="text-center text-nowrap">점수</th>
						<th class="text-center text-nowrap">소요시간</th>
						<th class="text-center text-nowrap">결과</th>
						<th class="text-center text-nowrap">날짜</th>
						<th class="text-center text-nowrap">메모</th>

					</tr>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($tests as $entry) {
						if (
							true
						) {
					?>
							<form id="test_<?= $seq ?>" action="<?= site_url('dashboard/test_modify') ?>" method="post">
								<tr class="flex-nowrap">
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">

									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle">
										<div class="d-flex"><input type="submit" class="text-center" value="수정">
										/<input type="button" onclick="location.href='<?= site_url('/dashboard/test_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="text-center align-middle"> <input type="text" name="type" size=6 class="text-start" value="<?= $entry->type ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="grade" size=6 class="text-center" value="<?= $entry->grade ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="level" size=5 class="text-center" value="<?= $entry->level ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="gubun1" size=3 class="text-start" value="<?= $entry->gubun1 ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="gubun2" size=3 class="text-start" value="<?= $entry->gubun2 ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="gubun3" size=3 class="text-start" value="<?= $entry->gubun3 ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="open" size=2 class="text-center" value="<?= $entry->open ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="test_name" size=20 class="text-start" value="<?= $entry->test_name ?>"></td>

									<?php
									if ($entry->total_num == 0) {
										$score = 0;
									} else {
										$score = ($entry->corrt_num / $entry->total_num) * 100;
									}
									?>
									<td class="text-center align-middle"> <input type="text" name="corrt_num" size=2 class="text-center" value="<?= $entry->corrt_num ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="total_num" size=2 class="text-center" value="<?= $entry->total_num ?>"></td>
									<td class="text-center align-middle">
										<div >
												<div class="text-nowrap">
													<?= $entry->corrt_num ?>/<?= $entry->total_num ?>
												</div>
												<div class="text-nowrap"> 
														( <?= number_format($score, 2) ?>점 ) 
												</div>
										</div>
									</td>
									<td class="text-center align-middle"> <input type="text" name="time" size=6 class="text-center" value="<?= $entry->time ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="result" size=5 class="text-center" value="<?= $entry->result ?>"></td>
									<td class="text-center align-middle"> <input type="text" name="test_date" size=10 class="text-center" value="<?= $entry->test_date ?>"></td>
									<td class="text-center align-middle"> <textarea name="memo" cols=20 rows="2" class="text-start"><?= $entry->memo ?> </textarea></td>
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