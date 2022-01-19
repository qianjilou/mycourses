<?php
	header("content-type:text/html;charset=utf-8");
	$money = 110;
	if($money > 180)
	{
		echo '你的消费大于180,属于高级会员';
	}else
	{
		echo '你的消费不大于180,不属于高级会员';
	}
	echo 'if完毕';