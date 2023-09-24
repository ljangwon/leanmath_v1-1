<div class="span10">
	<article>
		<h3> 학생 추가화면 </h3>

		<form action="<?= site_url() ?>/student/add" method="post" >
			<?php echo validation_errors(); ?>
			<input type="text" name="name" placeholder="이름" class="span12" />
			<input type="text" name="class_name" placeholder="수업이름" class="span12" />
			<div class="form_control">
				<input class="btn" type="submit" value="추가" />
				<a href="<?= site_url('/student/lists')?>" class="btn">목록</a>
			</div>
		</form>
	</article>
</div>