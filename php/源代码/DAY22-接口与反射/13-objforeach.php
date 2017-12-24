<?php
	header('content-type:text/html;charset=utf-8');

	class Cat{
		public $name = '小花猫';
		public $age = 2;
		protected $food = '沙丁鱼';
		private $lover = '大花狗';
		protected $grade;

		public function __construct($name, $age, $food, $lover){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
			$this->lover = $lover;
		}

		//以遍历的形式显示属性信息
		public function showInfo(){
			echo '<br> 属性信息是:';
			foreach($this as $key => $val){
				echo "<br> $key = $val";
			}
		}

		public function setGrade($grade){
			$this->grade = $grade;
		}

		public function getGrade(){
			return $this->grade;
		}
	}

//	$cat = new Cat;
//
//	//遍历[在类的外部遍历，只能看到public的属性]
//	foreach($cat as $key => $val){
//		echo "<br> $key = $val";
//	}
//	echo '<br> --------------------';
//
//	$cat->showInfo();


	//布置冒泡排序[有一群小猫对象(年龄，名字, 考试成绩)， 对小猫的成绩进行排序]

	//三只小猫
	$cat1 = new Cat('aa', 1, '小鱼', '小狗');
	$cat1->setGrade(10);
	$cat2 = new Cat('bb', 1, '小鱼', '小狗');
	$cat2->setGrade(11);
	$cat3 = new Cat('cc', 1, '小鱼', '小狗');
	$cat3->setGrade(2);

	//将三只小猫放到一个数组中
	$cat_arr = array($cat1, $cat2, $cat3);

	echo '<pre>';
	var_dump($cat_arr);

	