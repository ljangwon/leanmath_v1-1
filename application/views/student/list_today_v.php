<div class="span10">
	<ul class="nav nav-tabs nav-stacked">
	<?php
		$weekString = array("일", "월", "화", "수", "목", "금", "토");
	?>
		
	<h4> 학생 명단 </h4>
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
				<div style="display:inline-block" >
					<form action="<?= site_url('/student/delete') ?>" method="post">
						<input type="hidden" name="student_id" value="<?= $entry->id ?>" />

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