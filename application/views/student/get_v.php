<div class="span10 ">

	<div class="row">
		<h3><?= $student->name ?> Dashboard </h3>
	</div>

	<div class="row"><?= kdate($student->created) ?>, 학생 ID = <?= $student->id ?>
		<?= $this->session->set_userdata('student_id', $student->id) ?>
		<?= $this->session->set_userdata('st_id', $student->id) ?>
	</div>
	<!-- 학생정보 title end  -->


	<form action="<?= site_url() ?>/student/modify" method="post">

		<!-- 학생정보 입력정보 시작 -->
		<div class="row">
			<input type="hidden" name="id" value="<?= $student->id ?>" />

			<div class="col">
				이름: <input type="text" name="name" value="<?= $student->name ?>" placeholder="이름" class="span1" />
				학년구분(초중고): <input type="text" name="grade1" value="<?= $student->grade1 ?>" placeholder="학년구분1" class="span1" />
				<br>
				학교이름: <input type="text" name="school_name" value="<?= $student->school_name ?>" placeholder="학교이름" class="span1" />
				학년: <input type="text" name="grade2" value="<?= $student->grade2 ?>" placeholder="학년구분2" class="span1" />
				<br>
				수업이름: <input type="text" name="class_name" value="<?= $student->class_name ?>" placeholder="수업이름" class="span1" />
				<br>
				수업요일1: <input type="text" name="class_day1" value="<?= $student->class_day1 ?>" placeholder="수업요일1" class="span1" />
				수업시간1: <input type="text" name="class_time1" value="<?= $student->class_time1 ?>" placeholder="수업시간1" class="span1" />
				<br>
				수업요일2: <input type="text" name="class_day2" value="<?= $student->class_day2 ?>" placeholder="수업요일2" class="span1" />
				수업시간2: <input type="text" name="class_time2" value="<?= $student->class_time2 ?>" placeholder="수업시간2" class="span1" />
				<br>
				수업요일3: <input type="text" name="class_day3" value="<?= $student->class_day3 ?>" placeholder="수업요일3" class="span1" />
				수업시간3: <input type="text" name="class_time3" value="<?= $student->class_time3 ?>" placeholder="수업시간3" class="span1" />
				<br>
				수업료: <input type="text" name="fees" value="<?= $student->fees ?>" placeholder="수업료" class="span2" />
				수강여부: <input type="text" name="flag" value="<?= $student->flag ?>" placeholder="수강여부" class="span1" /> 수강: 1, 대기: 0
			</div>

			<div class="col">
				<label for="memo" class="form-lable">메모</label>
				<textarea name="memo" placeholder="메모" class="span6" rows="5"> <?= $student->memo ?> </textarea>
			</div>
		</div>
		<!-- 학생정보 end  -->

		<div class="row">
			<div class="form_control">
				<input class="btn" type="submit" value="수정" />
			</div>
		</div>
		<!-- 수정버튼  -->

	</form>

	<div class="row">
		<form action="<?= site_url('/student/delete') ?>" method="post">
			<input type="hidden" name="student_id" value="<?= $student->id ?>" />
			<input type="submit" class="btn" value="학생삭제" />
			<a href="<?= site_url('/student/add') ?>" class="btn">학생추가</a>
			<a href="<?= site_url('/student/lists') ?>" class="btn">학생리스트</a>
		</form>
	</div>

	<div class="row">

		<div class="table-responsive">
			<h4> 주요 평가 기록 </h4>
			<form action="<?= site_url('/test_history/add') ?>" method="post">
				<input type="hidden" name="st_id" value="<?= $student->id ?>" />
				<input class="btn" type="submit" value="추가" />
			</form>

			<table class="table table-striped table-hover table-sm table align-middle">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">구분</th>
						<th scope="col">메모</th>
					</tr>

				</thead>

				<tbody>
					<?php
					$i = 1;
					foreach ($test_hs as $entry) {
					?>
						<tr class="align-middle">
							<th scope="row"><a href="<?= site_url('/test_history/get/') ?>/<?= $entry->id ?>"><?= $i ?></a></th>
							<td class="align-middle"><?= $entry->course ?></td>
							<td class="align-middle"><?= $entry->memo ?></td>
						</tr>
					<?php
						$i++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">

		<div class="table-responsive">
			<h4> 자기주도 학습 시간 계획 </h4>
			<table class="table table-striped table-hover table-sm table align-middle">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">구분</th>
						<th scope="col">메모</th>
					</tr>

				</thead>

				<tbody>
					<tr class="align-middle">
						<th scope="row">1 </th>
						<td class="align-middle">구분1</td>
						<td class="align-middle">메모1</td>
					</tr>
					<tr class="align-middle">
						<th scope="row">2 </th>
						<td class="align-middle">구분2</td>
						<td class="align-middle">메모2</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">

		<div class="table-responsive">
			<h4> 학습한 교재 이력 메모 </h4>
			<table class="table table-striped table-hover table-sm table align-middle">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">구분</th>
						<th scope="col">메모</th>
					</tr>

				</thead>

				<tbody>
					<tr class="align-middle">
						<th scope="row">1 </th>
						<td class="align-middle">구분1</td>
						<td class="align-middle">메모1</td>
					</tr>
					<tr class="align-middle">
						<th scope="row">2 </th>
						<td class="align-middle">구분2</td>
						<td class="align-middle">메모2</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>

	<div class="row">
		<div class="table-responsive">
			<h4> 교재진도 이력 </h4>
			<table class="table table-striped table-hover table-sm table align-middle">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">구분</th>
						<th scope="col">메모</th>
					</tr>

				</thead>

				<tbody>
					<tr class="align-middle">
						<th scope="row">1 </th>
						<td class="align-middle">구분1</td>
						<td class="align-middle">메모1</td>
					</tr>
					<tr class="align-middle">
						<th scope="row">2 </th>
						<td class="align-middle">구분2</td>
						<td class="align-middle">메모2</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>


	<div class="row">
		<div class="table-responsive">
			<h4> 테스트 결과 </h4>
			<form action="<?= site_url('/test/add') ?>" method="post">
				<input type="hidden" name="st_id" value="<?= $student->id ?>" />
				<input class="btn" type="submit" value="추가" />
			</form>
			<table class="table table-striped table-hover table-sm table align-middle">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">시험구분</th>
						<th scope="col">과정</th>
						<th scope="col">수준</th>
						<th scope="col">단원</th>
						<th scope="col">점수</th>
						<th scope="col">결과</th>
						<th scope="col">날짜</th>
						<th scope="col">메모</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($tests as $entry) {
					?>
						<tr class="align-middle">
							<th scope="row"><a href="<?= site_url('/test/get/') ?>/<?= $entry->id ?>"><?= $i ?></a></th>
							<td class="align-middle"><?= $entry->type ?></td>
							<td class="align-middle"><?= $entry->grade ?></td>
							<td class="align-middle"><?= $entry->level ?></td>
							<td class="align-middle"><?= $entry->chapter ?></td>
							<?php
							if ($entry->total_num == 0) {
								$score = 0;
							} else {
								$score = ($entry->corrt_num / $entry->total_num) * 100;
							}
							?>
							<td class="align-middle">
								<p><?= $entry->corrt_num ?>/<?= $entry->total_num ?></p>
								<p>( <?= number_format($score, 2) ?>점 )</p>
							</td>
							<td class="align-middle"><?= $entry->result ?></td>
							<td class="align-middle"><?php $date = date_create($entry->test_date);
																				echo date_format($date, 'Y/m/d'); ?></td>
							<td class="align-middle"><?= $entry->memo ?></td>
						</tr>
					<?php
						$i++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

</div>