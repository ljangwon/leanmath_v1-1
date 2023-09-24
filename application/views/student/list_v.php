<div class="span10">
	<ul class="nav nav-tabs nav-stacked">
	<?php
		$weekString = array("일", "월", "화", "수", "목", "금", "토");
	?>
		
	<h4> 학생 명단 ( Today: <?=date("Y-m-d", time())?> <?=$weekString[date('w')] ?> ) </h4>
	<a href="<?= site_url('/student/add') ?>" class="btn">학생추가</a>
	<?php
	foreach($students as $entry){
		if ( true ) {
	?>
		<li>
			<div>
				<div style="display:inline" >
					<a href="<?=site_url('/student/get/')?>/<?=$entry->id?>">
						<?=$entry->name?>- <?=$entry->grade1?>(<?=$entry->grade2?>)-<?=$entry->class_name ?></a> 
				</div> 
				<div style="display:inline-block" >
					<form action="<?= site_url('/student/delete') ?>" method="post">
						<input type="hidden" name="student_id" value="<?= $entry->id ?>" />
						<input type="submit" class="btn" onclick="alert('삭제하시겠습니까?')" value="삭제" />
					</form>
				</div>
			</div>
		</li>

	<?php
				 }
	}
	?>
	</ul>
</div>