<?php
	header('content-type:text/html;charset=utf-8');

	//学生考试系统 
	
	class Student{
		public $name;
		public $age;
		//$grade 考分
		private $grade;
		//构造函数
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
		//评分
		public function setGrade($grade){
			//可以加入对数据的验证..
			$this->grade = $grade;
		}
		//显示分数
		public function showGrade(){
			
			echo '<br> ' . $this->name . ' 成绩是 ' . $this->grade;
		}
	}

	//小学生
	class Pupil extends Student{
		
		//考试函数
		public function testing(){
			
			echo '<br> 小学生在考试...';
		}
	}
	$pupil = new Pupil('小花', 8);
	$pupil->testing();
	$pupil->setGrade(90);
	$pupil->showGrade();

	//大学生考试

	class Graduate extends Student{
				
		//考试函数
		public function testing(){
			
			echo '<br> 大学生在考试...';
		}

	}

	$graduate = new Graduate('大花', 24);
	$graduate->testing();
	$graduate->setGrade(100);
	$graduate->showGrade();
	

	
