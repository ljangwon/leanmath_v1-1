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