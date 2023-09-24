UPDATE stats_daily_collect_pay AS t2

LEFT JOIN stats_daily_collect_pay AS t1 ON

  (t1.prdCd = t2.prdCd AND t1.attrPrdCd = t2.attrPrdCd AND t1.prdMoveDt = '2020-03-18 오전 12:00:00')

SET  

  t2.gftTypCd = t1.gftTypCd

WHERE t2.gftTypCd is null;


UPDATE student AS t2 LEFT JOIN student AS t1 ON (t1.id = t2.id ) 
SET t2.user_id = t1.name WHERE t2.user_id is null