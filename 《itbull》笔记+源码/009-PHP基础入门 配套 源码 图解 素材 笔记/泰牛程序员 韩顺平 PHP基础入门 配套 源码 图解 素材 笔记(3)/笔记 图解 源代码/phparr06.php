<?php
	header("content-type:text/html;charset=utf-8");
	/**
	创建一个数组 $student   该学生包含如下信息
	年龄 , 名字, 性别，是否结婚，身高 , 家庭情况(地址，父母名字)
	请设计该数组应该如何设计.var_dump()输出

	*/
	$student = array(
	'age'=>23, 
	'name'=>'晓明', 
	'sex'=>'男', 
	'marraied'=>true, 
	'height'=>180.34, 
	'family'=>array('address'=>'北京天坛', 'mother'=>'小红')
	);
	var_dump($student);
	echo $student['family']['mother'];
	

	$student_arr = array($student, $student, $student,$student);
	var_dump($student_arr);