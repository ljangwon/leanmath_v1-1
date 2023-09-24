<div class="span10">
	<article>
		<h1><?=$topic->title?></h1>
		<div>
			<div><?=kdate($topic->created)?></div>
			<?=auto_link($topic->description)?>
			<?php   
				$this->session->set_userdata( 'cid', $topic->id );			
			?>
			
		</div>
	</article>
	<div>     
    <form action="<?=site_url()?>/topic/delete" method="post">
        <input type="hidden" name="topic_id" value="<?=$topic->id?>" />
        <a href="<?=site_url()?>/topic/add" class="btn">추가</a>       
        <input type="submit" class="btn" value="삭제" />
    </form>
	</div>
</div>