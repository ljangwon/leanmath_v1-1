<div class="span2">
	<ul class="nav nav-tabs nav-stacked">
	<?php
		$weekString = array("일", "월", "화", "수", "목", "금", "토");
	?>
		
	<h4> 학생 명단 </h4>
	<h7> ( Today: <?=date("Y-m-d", time())?> <?=$weekString[date('w')] ?> ) </h7>
	<hr>
	<a href="<?= site_url('/student/add') ?>" class="btn">학생추가</a>
	<?php
	foreach($students as $entry){
		if ( $entry->class_day1 == date('w') |
				 $entry->class_day2 == date('w') |
				 $entry->class_day3 == date('w') ) {
	?>
		<li>
			<div>
				<div style="display:inline" >
					<a href="<?=site_url('/student/today_check/')?>/<?=$entry->id?>">
						<?=$entry->name?>- <?=$entry->grade1?>(<?=$entry->grade2?>)-<?=$entry->class_name ?></a> 
				</div> 
			</div>
		</li>

	<?php
				 }
	}
	?>
	</ul>
</div>