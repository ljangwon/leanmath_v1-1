<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	session_st_id : <?= $this->session->userdata('st_id') ?>
	student name : <?= $this->session->userdata('st_name') ?>

	<!-- section start -->
	<form id="st_info_modify" action="<?= site_url() ?>/dashboard/st_modify" method="post">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<div class="main-title">학생 인적사항 </div>
			<div class="btn-toolbar mb-1 mb-md-0">
				<div class="btn-group me-2">
					<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#st_info-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
						접고펴기
					</a>
					<button type="submit" class="btn btn-sm btn-outline-secondary">
						수정
					</button>
					<button type="button" id="btn_st_add" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#student_add">
						학생추가
					</button>
					<button type="button" id="btn_st_del" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#student_del">
						학생삭제
					</button>
				</div>
			</div>
		</div>

		<!-- collapse start -->
		<?php
		if ($this->session->userdata('st_show')) {
		?>
			<div id="st_info-collapse" class="row collapse.show">
			<?php
		} else {
			?>
				<div id="st_info-collapse" class="row collapse.show">
				<?php
			}
				?>
				<!-- --------------------------------------- -->
				<div class="col-sm-2 text-center">
					<label for="" class="form-label">ST_ID</label>
					<input type="text" name="id" class="form-control" placeholder="" value="<?= $student->id ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">이 름</label>
					<input type="text" name="name" class="form-control" placeholder="" value="<?= $student->name ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">학생전화</label>
					<input type="text" name="s_phone" class="form-control" placeholder="" value="<?= $student->s_phone ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">거주지</label>
					<input type="text" name="house" class="form-control" placeholder="" value="<?= $student->house ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">형제</label>
					<input type="text" name="sibling_name" class="form-control" value="<?= $student->sibling_name ?>">
				</div>
				<div class="col-sm-2 text-center">
					<label for="" class="form-label">빈칸</label>
					<input type="text" name="" class="form-control" value="">
				</div>
				<!-- --------------------------------------- -->
				<div class="col-sm-3 text-center">
					<label for="" class="form-label">학 교</label>
					<input type="text" name="school_name" class="form-control" placeholder="명일중" value="<?= $student->school_name ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label text-nowrap">구 분</label>
					<input type="text" name="grade1" class="form-control" placeholder="중등" value="<?= $student->grade1 ?>">
				</div>

				<div class="col-sm-3 text-center text-nowrap">
					<label for="" class="form-label">학 년</label>
					<input type="text" name="grade2" class="form-control" placeholder="1" value="<?= $student->grade2 ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label">수업명</label>
					<input type="text" name="class_name" class="form-control" placeholder="수6토14" value="<?= $student->class_name ?>">
				</div>
				<!-- --------------------------------------- -->
				<div class="col-sm-2 text-center">
					<label for="" class="form-label">요일1</label>
					<input type="text" name="class_day1" class="form-control" placeholder="3" value="<?= $student->class_day1 ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">시간1</label>
					<input type="text" name="class_time1" class="form-control" placeholder="14" value="<?= $student->class_time1 ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">요일2</label>
					<input type="text" name="class_day2" class="form-control" placeholder="6" value="<?= $student->class_day2 ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">시간2</label>
					<input type="text" name="class_time2" class="form-control" placeholder="9" value="<?= $student->class_time2 ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">요일3</label>
					<input type="text" name="class_day3" class="form-control" placeholder="" value="<?= $student->class_day3 ?>">
				</div>

				<div class="col-sm-2 text-center">
					<label for="" class="form-label">시간3</label>
					<input type="text" name="class_time3" class="form-control" placeholder="" value="<?= $student->class_time3 ?>">
				</div>

				<!-- --------------------------------------- -->

				<div class="col-sm-4 text-center">
					<label for="" class="form-label">수업료</label>
					<input type="text" name="fees" class="form-control" placeholder="수업료" value="<?= $student->fees ?>">
				</div>
				<div class="col-sm-4 text-center">
					<label for="" class="form-label">할인금액1</label>
					<input type="text" name="discount1" class="form-control" placeholder="할인금액" value="<?= $student->discount1 ?>">
				</div>

				<div class="col-sm-4 text-center">
					<label for="" class="form-label">할인금액2</label>
					<input type="text" name="discount2" class="form-control" placeholder="할인금액" value="<?= $student->discount2 ?>">
				</div>

				<!-- --------------------------------------- -->

				<div class="col-sm-3 text-center">
					<label for="" class="form-label">영수증 폰번호</label>
					<input type="text" name="receipt_phone" class="form-control" placeholder="영수증 폰번호" value="<?= $student->receipt_phone ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label">영수증 사용</label>
					<input type="text" name="receipt_use" class="form-control" placeholder="영수증 사용여부" value="<?= $student->receipt_use ?>">
				</div>

				<div class="col-sm-6 text-center">
					<label for="" class="form-label">할인사유</label>
					<input type="text" name="discount_memo" class="form-control" placeholder="할인 사유" value="<?= $student->discount_memo ?>">
				</div>

				<!-- --------------------------------------- -->
				<div class="col-sm-3 text-center">
					<label for="" class="form-label text-nowrap">삭제flag</label>
					<input type="text" name="flag" class="form-control" placeholder="flag" value="<?= $student->flag ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label text-nowrap">학생상태</label>
					<input type="text" name="status" class="form-control" placeholder="학생상태" value="<?= $student->status ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label text-nowrap">시작일</label>
					<input type="text" name="start_date" class="form-control" placeholder="시작일" value="<?= $student->start_date ?>">
				</div>

				<div class="col-sm-3 text-center">
					<label for="" class="form-label text-nowrap">종료일</label>
					<input type="text" name="end_date" class="form-control" value="<?= $student->end_date ?>">
				</div>

				<!-- --------------------------------------- -->
				<div class="col-sm-4 text-center">
					<label class="form-label">연산선행수준</label>
					<input type="text" name="level1" class="form-control" value="<?= $student->level1 ?>">
				</div>

				<div class="col-sm-4 text-center">
					<label class="form-label">개념선행수준</label>
					<input type="text" name="level2" class="form-control" value="<?= $student->level2 ?>">
				</div>
				<div class="col-sm-4 text-center">

					<label class="form-label">현행심화수준</label>
					<input type="text" name="level3" class="form-control" value="<?= $student->level3 ?>">
				</div>
				<!-- --------------------------------------- -->
				<div class="col-sm-4 text-center">
					<label for="" class="form-label text-nowrap">마지막상담일</label>
					<input type="text" name="report_last_date" class="form-control" placeholder="" value="<?= $student->report_last_date ?>">
				</div>
				<div class="col-sm-4 text-center">
					<label class="form-label">지적사항 메모</label>
					<textarea name="check_memo" placeholder="지적사항 메모" class="form-control text-start" rows="5"><?= $student->check_memo ?> </textarea>
				</div>
				<div class="col-sm-4 text-center">
					<label class="form-label">지각/결석 메모</label>
					<textarea name="off_memo" placeholder="지각/결석 메모기" class="form-control text-start" rows="5"><?= $student->off_memo ?> </textarea>
				</div>
				<!-- --------------------------------------- -->

				<div class="col-sm-3 text-center">
					<label class="form-label">메모</label>
					<textarea name="memo" placeholder="메모" class="form-control text-start" rows="15"><?= $student->memo ?> </textarea>
				</div>
				<div class="col-sm-6 text-center">
					<label class="form-label">학습기록</label>
					<textarea name="study_memo" placeholder="학습기록" class="form-control text-start" rows="15"><?= $student->study_memo ?> </textarea>
				</div>
				<div class="col-sm-3 text-center">
					<label class="form-label">내신기록</label>
					<textarea name="test_memo" placeholder="내신기록" class="form-control text-start" rows="15"><?= $student->test_memo ?> </textarea>
				</div>
				</div>
	</form>

	<!-- Button trigger modal -->
	<!-- Modal1 -->
	<div class="modal fade" id="student_add" aria-labelledby="student_add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="st_add_Label">학생 추가</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= site_url() ?>/dashboard/st_add" method="post">
						<input type="text" name="name" placeholder="이름" class="span12" />
						<input type="text" name="class_name" placeholder="수업이름" class="span12" />
						<div class="form_control">
							<input class="btn" type="submit" value="학생추가" />
							<a href="<?= site_url('/dashboard') ?>" class="btn">대시보드</a>
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
	<div class="modal fade" id="student_del" aria-labelledby="student_del" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="st_delete_Label">학생 삭제</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<form action="<?= site_url() ?>/dashboard/st_delete" method="post">
						<input type="hidden" name="student_id" value="<?= $student->id ?>" />
						<div class="form_control">
							정말로 <?= $student->name ?> 을 삭제하시겠습니까?
							<br>
							<input class="btn" type="submit" value="학생삭제" />
							<a href="<?= site_url('/dashboard') ?>" class="btn">대시보드</a>
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

	<!-- section start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title">학습교재 메모 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#bookm-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="" class="btn btn-sm btn-outline-secondary">
					전체수정
				</button>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add/bookm') ?>'" class="btn btn-sm btn-outline-secondary">
					추가1
				</button>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add3/bookm') ?>'" class="btn btn-sm btn-outline-secondary">
					추가3
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->

	<div id="bookm-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center text-nowrap">번호 </th>
						<th class="text-center text-nowrap">구분</th>
						<th class="text-center text-nowrap">순서</th>
						<th class="text-center text-nowrap">학습과정</th>
						<th class="text-center text-nowrap">교재메모</th>
				</thead>

				<tbody>
					<?php
					$seq = 0;
					foreach ($memos_book as $entry) {
						if (
							true
						) {
					?>
							<form id="memo_book<?= $seq ?>" action="<?= site_url('dashboard/memo_modify') ?>" method="post">
								<tr>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">
									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= ++$seq ?> </th>
									<td class="text-center align-middle">
										<div class="d-flex"><input type="submit" class="text-center" value="수정">
											/<input type="button" onclick="location.href='<?= site_url('/dashboard/memo_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="align-middle"><input type="text" name="seq" size=3 class="text-start" placeholder="" value="<?= $entry->seq ?>"></td>
									<td class="align-middle"><input type="text" name="m_date" size=10 class="text-start" placeholder="" value="<?= $entry->m_date ?>"></td>

									<td><textarea name="memo" cols=100 rows="2" class="text-start"><?= $entry->memo ?> </textarea> </td>
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

	<!-- 자기주도학습 시간계획 화면 start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="자기주도학습 시간 기록">
			자기주도학습 시간계획 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#schedule-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/schedule_add/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="schedule-collapse" class="row collapse.show">

		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr class="d-flex flex-nowrap">
						<th width="50px" class="text-center text-nowrap">번호 </th>
						<th class="col-1 text-center text-nowrap">수정/삭제</th>
						<th class="col-1 text-center text-nowrap">월</th>
						<th class="col-1 text-center text-nowrap">화</th>
						<th class="col-1 text-center text-nowrap">수</th>
						<th class="col-1 text-center text-nowrap">목</th>
						<th class="col-1 text-center text-nowrap">금</th>
						<th class="col-1 text-center text-nowrap">토</th>
						<th class="col-1 text-center text-nowrap">일</th>
						<th class="col-1 text-center text-nowrap">합계</th>
						<th class="col-1 text-center text-nowrap">시작일</th>
						<th class="col-1 text-center text-nowrap">종료일</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($schedules as $entry) {
						if (
							true
						) {
					?>
							<form id="schedule_<? $seq ?>" action="<?= site_url('dashboard/schedule_modify') ?>" method="post">
								<tr class="d-flex flex-nowrap">
									<th width="50px" class="text-nowrap text-center align-middle bg-secondary text-white"><?= $seq++ ?></th>
									<td class="col-1 align-middle">
										<div class="d-flex">
											<input type="submit" class="text-center" value="수정">
											/<input type="button" onclick="location.href='<?= site_url('/dashboard/schedule_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">
									<td class="col-1 "><input type="text" size=6 name="mon_s" class="text-center " value="<?= $entry->mon_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="tue_s" class="text-center" value="<?= $entry->tue_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="wed_s" class="text-center" value="<?= $entry->wed_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="thr_s" class="text-center" value="<?= $entry->thr_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="fri_s" class="text-center" value="<?= $entry->fri_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="sat_s" class="text-center" value="<?= $entry->sat_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="sun_s" class="text-center" value="<?= $entry->sun_s ?>"></td>
									<td class="col-1 "><input type="text" size=6 name="time_per_week" class="text-center" value="<?= $entry->time_per_week ?>"> </td>
									<td class="col-1 "><input type="text" size=10 name="s_date" class="text-left text-nowrap" value="<?= $entry->s_date ?>"> </td>
									<td class="col-1 "><input type="text" size=10 name="e_date" class="text-left text-nowrap" value="<?= $entry->e_date ?>"> </td>
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

	<!-- 지적사항 메모 화면 start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="지적사항 메모">
			지적사항 메모 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#check_memo-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add/checkm') ?>'" class="btn btn-sm btn-outline-secondary">
					추가1
				</button>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add3/checkm') ?>'" class="btn btn-sm btn-outline-secondary">
					추가3
				</button>
				<button type="button" onclick="memo_modify()" class="btn btn-sm btn-outline-secondary">
					전체수정
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="check_memo-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center text-nowrap">번호 </th>
						<th class="text-center text-nowrap">구분</th>
						<th class="text-center text-nowrap">날짜</th>
						<th class="text-center text-nowrap">지적사항</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($memos_check as $entry) {
						if (
							true
						) {
					?>
							<form id="check_memo_<?= $seq ?>" action="<?= site_url('dashboard/memo_modify') ?>" method="post">
								<tr>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">
									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle">
										<div class="d-flex"> <input type="submit" class="text-center" value="수정">
											/<input type="button" onclick="location.href='<?= site_url('/dashboard/memo_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="text-center align-middle"><input type="text" name="m_date" size=10 class="text-start" value="<?= $entry->m_date ?>"></td>

									<td><textarea name="memo" cols=50 rows="2" class="text-start"><?= $entry->memo ?> </textarea>

								</tr>
								<!-- <tr>
									<td class="text-center align-middle"> 조치완료상태 <input type="text" size=5 name="status" class="text-center" placeholder="" value="<?= $entry->status ?>"></td>

									<td class="text-center align-middle"> 조치내용 </td>
									<td><textarea name="f_memo" cols=50 rows="2" class="text-start"><?= $entry->f_memo ?> </textarea> </td>
								</tr> -->
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


	<!-- section start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title">지각결석 메모 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#noshow-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add/noshow') ?>'" class="btn btn-sm btn-outline-secondary">
					추가1
				</button>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/memo_add3/noshow') ?>'" class="btn btn-sm btn-outline-secondary">
					추가3
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="noshow-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center text-nowrap">번호 </th>
						<th class="text-center text-nowrap">구분</th>
						<th class="text-center text-nowrap">날짜</th>
						<th class="text-center text-nowrap">사유</th>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($memos_noshow as $entry) {
						if (
							true
						) {
					?>
							<form id="noshow_memo_<?= $seq ?>" action="<?= site_url('dashboard/memo_modify') ?>" method="post">
								<tr>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">
									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle">
										<div class="d-flex"><input type="submit" class="text-center" value="수정">
											/<input type="button" onclick="location.href='<?= site_url('/dashboard/memo_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="align-middle"><input type="text" name="m_date" size=10 class="text-start" placeholder="" value="<?= $entry->m_date ?>"></td>

									<td><textarea name="memo" cols=50 rows="2" class="text-start"><?= $entry->memo ?> </textarea>

								</tr>
								<!-- <tr>
									<td class="align-middle"> 보충완료상태 <input type="text" size=5 name="status" class="text-center" placeholder="" value="<?= $entry->status ?>"></td>

									<td class="align-middle"> 보충계획 </td>
									<td><textarea name="f_memo" cols=50 rows="2" class="text-start"><?= $entry->f_memo ?> </textarea> </td>
								</tr> -->
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

	<!-- 학습 진도 체크 화면 start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="">
			학습 진도 체크 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#study-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/study_add/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가3
				</button>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/study_add1/') ?>'" class="btn btn-sm btn-outline-secondary">
					추가1
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->
	<div id="study-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center text-nowrap">번호 </th>
						<th class="text-center text-nowrap">수정/삭제</th>
						<th class="text-center text-nowrap">순서 </th>
						<th class="text-center text-nowrap">구분 </th>
						<th class="text-center text-nowrap">날짜 </th>
						<th class="text-center text-nowrap">1단원</th>
						<th class="text-center text-nowrap">2단원</th>
						<th class="text-center text-nowrap">3단원</th>
						<th class="text-center text-nowrap">4단원</th>
						<th class="text-center text-nowrap">5단원</th>
						<th class="text-center text-nowrap">6단원</th>
						<th class="text-center text-nowrap">7단원</th>
						<th class="text-center text-nowrap">8단원</th>
						<th class="text-center text-nowrap">9단원</th>
						<th class="text-center text-nowrap">10단원</th>
						<th class="text-center text-nowrap">11단원</th>
						<th class="text-center text-nowrap">12단원</th>
						<th class="text-center text-nowrap">13단원</th>

					</tr>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($studys as $entry) {
						if (
							$entry->open == "1"
						) {
					?>
							<form id="study_<?= $seq ?>" action="<?= site_url('dashboard/study_modify') ?>" method="post">
								<tr>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<input type="hidden" name="st_id" value="<?= $entry->st_id ?>">

									<th rowspan=2 class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle text-nowrap">
										<input type="submit" class="text-center" value="수정">
										/<input type="button" onclick="location.href='<?= site_url('/dashboard/study_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
									</td>
									<td><input type="text" name="seq" size=3 class="text-start" value="<?= $entry->seq ?>"></td>
									<td> <input type="text" name="course" size=10 class="text-start" value="<?= $entry->course ?>"> </td>
									<td> 시작 </td>
									<td> <input type="text" name="s_chap1" size=8 class="text-start" value="<?= $entry->s_chap1 ?>"> </td>
									<td> <input type="text" name="s_chap2" size=8 class="text-start" value="<?= $entry->s_chap2 ?>"> </td>
									<td> <input type="text" name="s_chap3" size=8 class="text-start" value="<?= $entry->s_chap3 ?>"> </td>
									<td> <input type="text" name="s_chap4" size=8 class="text-start" value="<?= $entry->s_chap4 ?>"> </td>
									<td> <input type="text" name="s_chap5" size=8 class="text-start" value="<?= $entry->s_chap5 ?>"> </td>
									<td> <input type="text" name="s_chap6" size=8 class="text-start" value="<?= $entry->s_chap6 ?>"> </td>
									<td> <input type="text" name="s_chap7" size=8 class="text-start" value="<?= $entry->s_chap7 ?>"> </td>
									<td> <input type="text" name="s_chap8" size=8 class="text-start" value="<?= $entry->s_chap8 ?>"> </td>
									<td> <input type="text" name="s_chap9" size=8 class="text-start" value="<?= $entry->s_chap9 ?>"> </td>
									<td> <input type="text" name="s_chap10" size=8 class="text-start" value="<?= $entry->s_chap10 ?>"> </td>
									<td> <input type="text" name="s_chap11" size=8 class="text-start" value="<?= $entry->s_chap11 ?>"> </td>
									<td> <input type="text" name="s_chap12" size=8 class="text-start" value="<?= $entry->s_chap12 ?>"> </td>
									<td> <input type="text" name="s_chap13" size=8 class="text-start" value="<?= $entry->s_chap13 ?>"> </td>
								</tr>
								<tr>
									<td class="text-nowrap"> <input type="text" name="category" size=6 class="text-start" value="<?= $entry->category ?>">
										공개<input type="text" name="open" size=1 class="text-start" value="<?= $entry->open ?>">
									</td>
									<td colspan=2> <input type="text" name="book" size=20 class="text-start" value="<?= $entry->book ?>"> </td>
									<td> 종료 </td>
									<td> <input type="text" name="e_chap1" size=8 class="text-start" value="<?= $entry->e_chap1 ?>"> </td>
									<td> <input type="text" name="e_chap2" size=8 class="text-start" value="<?= $entry->e_chap2 ?>"> </td>
									<td> <input type="text" name="e_chap3" size=8 class="text-start" value="<?= $entry->e_chap3 ?>"> </td>
									<td> <input type="text" name="e_chap4" size=8 class="text-start" value="<?= $entry->e_chap4 ?>"> </td>
									<td> <input type="text" name="e_chap5" size=8 class="text-start" value="<?= $entry->e_chap5 ?>"> </td>
									<td> <input type="text" name="e_chap6" size=8 class="text-start" value="<?= $entry->e_chap6 ?>"> </td>
									<td> <input type="text" name="e_chap7" size=8 class="text-start" value="<?= $entry->e_chap7 ?>"> </td>
									<td> <input type="text" name="e_chap8" size=8 class="text-start" value="<?= $entry->e_chap8 ?>"> </td>
									<td> <input type="text" name="e_chap9" size=8 class="text-start" value="<?= $entry->e_chap9 ?>"> </td>
									<td> <input type="text" name="e_chap10" size=8 class="text-start" value="<?= $entry->e_chap10 ?>"> </td>
									<td> <input type="text" name="e_chap11" size=8 class="text-start" value="<?= $entry->e_chap11 ?>"> </td>
									<td> <input type="text" name="e_chap12" size=8 class="text-start" value="<?= $entry->e_chap12 ?>"> </td>
									<td> <input type="text" name="e_chap13" size=8 class="text-start" value="<?= $entry->e_chap13 ?>"> </td>
								</tr>

								<tr>
									<td colspan=3 class="text-nowrap"> 학습기간 <input type="text" name="period" size=18 class="text-start" value="<?= $entry->period ?>"> </td>
									<td class="text-nowrap"> 총단원수: <input type="text" name="count_chap" size=2 class="text-start" value="<?= $entry->count_chap ?>"> </td>
									<td class="text-nowrap"> 평가기록 </td>
									<td> <input type="text" name="t_chap1" size=35 class="text-start" value="<?= $entry->t_chap1 ?>"> </td>
									<td> <input type="text" name="t_chap2" size=35 class="text-start" value="<?= $entry->t_chap2 ?>"> </td>
									<td> <input type="text" name="t_chap3" size=35 class="text-start" value="<?= $entry->t_chap3 ?>"> </td>
									<td> <input type="text" name="t_chap4" size=35 class="text-start" value="<?= $entry->t_chap4 ?>"> </td>
									<td> <input type="text" name="t_chap5" size=35 class="text-start" value="<?= $entry->t_chap5 ?>"> </td>
									<td> <input type="text" name="t_chap6" size=35 class="text-start" value="<?= $entry->t_chap6 ?>"> </td>
									<td> <input type="text" name="t_chap7" size=35 class="text-start" value="<?= $entry->t_chap7 ?>"> </td>
									<td> <input type="text" name="t_chap8" size=35 class="text-start" value="<?= $entry->t_chap8 ?>"> </td>
									<td> <input type="text" name="t_chap9" size=35 class="text-start" value="<?= $entry->t_chap9 ?>"> </td>
									<td> <input type="text" name="t_chap10" size=35 class="text-start" value="<?= $entry->t_chap10 ?>"> </td>
									<td> <input type="text" name="t_chap11" size=35 class="text-start" value="<?= $entry->t_chap11 ?>"> </td>
									<td> <input type="text" name="t_chap12" size=35 class="text-start" value="<?= $entry->t_chap12 ?>"> </td>
									<td> <input type="text" name="t_chap13" size=35 class="text-start" value="<?= $entry->t_chap13 ?>"> </td>
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

				<tbody id='tbody_test'>
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
										<div>
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