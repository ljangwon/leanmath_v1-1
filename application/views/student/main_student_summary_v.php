<div class="span10">
<h3> 학생명단 메인화면 </h3>

	<p>초3 : <?=$st_count_e3->cnt?> 명 </p>
	<p>초4 : <?=$st_count_e4->cnt?> 명 </p>
	<p>초5 : <?=$st_count_e5->cnt?> 명 </p>
	<p>초6 : <?=$st_count_e6->cnt?> 명 </p>
	<p>초등 전체 : <?=$st_count_e->cnt?> 명 = 총 <?=number_format($st_fees_sum_e->fees)?> 원 </P>
	<hr>
	<p>중1 : <?=$st_count_m1->cnt?> 명 </p>
	<p>중2 : <?=$st_count_m2->cnt?> 명 </p>
	<p>중3 : <?=$st_count_m3->cnt?> 명 </p>
	<p>중등 전체 : <?=$st_count_m->cnt?> 명 = 총 <?=number_format($st_fees_sum_m->fees)?> 원 </p>
	<hr>
	<p>고1 :<?=$st_count_h1->cnt?> 명 </p>
	<p>고2 :<?=$st_count_h2->cnt?> 명 </p>
	<p>고3 :<?=$st_count_h3->cnt?> 명 </p>
	<p>고등 전체 : <?=$st_count_h->cnt?> 명  = 총 <?=number_format($st_fees_sum_h->fees)?> 원 </p>
	<hr>
	<p>전체 인원 : <?=$st_count_e->cnt + $st_count_m->cnt + $st_count_h->cnt?> 명 </p>
	<p>전체 매출 : <?=number_format($st_fees_sum_e-> fees + $st_fees_sum_m->fees + $st_fees_sum_h->fees )?> 원 </p>
</div>