<?php
	header('content-type:text/html;charset=utf-8');
	//对象运算符的连用

	class Student{
		public $name;
		private $school;

		//构造函数
		public function __construct($name, $school){
			$this->name = $name;
			$this->school = $school;
		}

		//给$school 提供 setXxx 和 Getxx方法
		public function getSchool(){
			return $this->school;
		}

		public function setSchool($school){
			$this->school = $school;
		}
	}

	class School{
		
		public $name;
		public $address;
		private $my_class;

		//构造函数
		public function __construct($name, $address, $my_class){
			$this->name = $name;
			$this->address = $address;
			$this->my_class = $my_class;
		}

		//给$school 提供 setXxx 和 Getxx方法
		public function getMyClass(){
			return $this->my_class;
		}

		public function setMyClass($my_class){
			$this->my_class = $my_class;
		}


	}

	class MyClass{
		
		protected $name;
		protected $stu_num;
		private $introduce;

		public function __construct($name, $stu_num, $introduce){
			$this->name = $name;
			$this->stu_num = $stu_num;
			$this->introduce = $introduce;
		}

		//给$MyClass 提供 setXxx 和 Getxx方法
		public function getIntroduce(){
			return $this->introduce;
		}

		public function setIntroduce($introduce){
			$this->introduce = $introduce;
		}

	}

	//创建班级对象
	
	$myClass = new MyClass('PHP7期', 80, 'php7期是一个很猛的班级! 大家都非常努力');

	echo '<pre>';
	var_dump($myClass);

	//创建学校对象
	
	$school = new School('泰牛程序员', '唐家岭1号院', $myClass);

	var_dump($school);

	//创建学生对象

	$student = new Student('文鹏', $school);

//	var_dump($student);
//	var_dump($student->getSchool());
//	var_dump($student->getSchool()->getMyClass());



	var_dump($student->getSchool()->getMyClass()->getIntroduce());

	//通过$student 对象，可以找到他对应的班级信息





