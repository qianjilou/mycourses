<?php
	header('content-type:text/html;charset=utf-8');

	class Monk{
		public $name;
		public $food;
		public function __construct($name, $food){
			//将成员属性初识化
			$this->name = $name;
			$this->food = $food;
		}
		//可以输出成员属性的值
		public function showInfo(){
			echo '<br> 和尚的信息如下:';
			echo '<br> name = ' . $this->name;
			echo '<br> food = ' . $this->food;
			echo '<br> showInfo <br>';
			var_dump($this);
			$this->food = '二锅头';
		}
	}

	$monk = new Monk('济公', '猪头肉');
	echo '<pre> monk <br>';
	var_dump($monk);
	$monk->showInfo();
	echo '<br> -------------------------<br>';
	var_dump($monk);


	$monk2 = new Monk('唐僧', '大白菜');

	$monk2->showInfo();
	echo '<br> ||||||||||||||||||<br>';
	var_dump($monk2);

	

	