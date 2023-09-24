<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	session_st_id : <?= $this->session->userdata('st_id') ?>
	student name : <?= $this->session->userdata('st_name') ?>

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
							true
						) {
					?>
							<form id="study_<?= $seq ?>" action="<?= site_url('dashboard/study_modify1') ?>" method="post">
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
									<td colspan=2 > <input type="text" name="book" size=20 class="text-start" value="<?= $entry->book ?>"> </td>
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

</main>