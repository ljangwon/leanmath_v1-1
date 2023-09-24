<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

	<!-- section start -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="main-title">환경설정 </div>
		<div class="btn-toolbar mb-1 mb-md-0">
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary btn-toggle" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-controls="main-collapse" aria-expanded="false" aria-label="Toggle navigation">
					접고펴기
				</a>
				<button type="button" onclick="location.href='<?= site_url('/dashboard/setting_add/global') ?>'" class="btn btn-sm btn-outline-secondary">
					추가
				</button>
			</div>
		</div>
	</div>

	<!-- collapse start -->

	<div id="setting-collapse" class="row collapse.show">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center text-nowrap">번호 </th>
						<th class="text-center text-nowrap">수정/삭제</th>
            <th class="text-center text-nowrap">타입</th>
            <th class="text-center text-nowrap">구분1</th>
            <th class="text-center text-nowrap">구분2</th>
						<th class="text-center text-nowrap">Key</th>
						<th class="text-center text-nowrap">Value</th>
            <th class="text-center text-nowrap">설명</th>
				</thead>

				<tbody>
					<?php
					$seq = 1;
					foreach ($settings as $entry) {
						if (
							  true
						) {
					?>
							<form id="setting_<?= $seq ?>" action="<?= site_url('dashboard/setting_modify') ?>" method="post">
								<tr>
									<input type="hidden" name="id" value="<?= $entry->id ?>">
									<th class="text-nowrap text-center align-middle bg-secondary text-white"> <?= $seq++ ?> </th>
									<td class="text-center align-middle">
										<div class="d-flex"><input type="submit" class="text-center" value="수정">
										/<input type="button" onclick="location.href='<?= site_url('/dashboard/setting_delete/' . $entry->id) ?>'" class="text-center" value="삭제">
										</div>
									</td>
									<td class="align-middle"><input type="text" name="type" size=10 class="text-start"  value="<?= $entry->type ?>"></td>
									<td class="align-middle"><input type="text" name="gubun1" size=10 class="text-start"  value="<?= $entry->gubun1 ?>"></td>
                  <td class="align-middle"><input type="text" name="gubun2" size=10 class="text-start"  value="<?= $entry->gubun2 ?>"></td>
                  <td class="align-middle"><input type="text" name="key" size=10 class="text-start"  value="<?= $entry->key ?>"></td>
                  <td class="align-middle"><input type="text" name="value" size=10 class="text-start"  value="<?= $entry->value ?>"></td>
									<td><textarea name="description" cols=30 rows="2" class="text-start"><?= $entry->description ?> </textarea> </td>
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