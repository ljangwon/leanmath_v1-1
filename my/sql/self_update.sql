update student as t1 , student as t2 
set t1.status = t2.flag 
where t2.id = t1.id