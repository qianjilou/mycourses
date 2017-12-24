<?php
	header('content-type:text/html;charset=utf-8');

	//访问控制符的举例说明

	class A{
		public $name;
		protected $job;
		private $salary;

		//构造函数
		public function __construct($name, $job, $salary){
			$this->name = $name;
			$this->job = $job;
			$this->salary = $salary;
		}

		//三个不同访问控制符的成员方法
		public function getName(){
			echo '<br> name =' . $this->name;
		}

		protected function getJob(){
			return $this->job;
		}

		private function getSalary(){
			return $this->salary;
		}

		//在类内部，使用protectd的属性和方法
		public function test(){

			echo '<br> job = ' . $this->job;

			echo '<br> job = ' . $this->getJob();
		}
		
		//在类内部，使用private的属性和方法

		public function test2(){
			
			echo '<br> slary = ' . $this->salary;

			echo '<br> salary = ' . $this->getSalary();
		}

	}


	$p1= new A('牛魔王', 'PHP初级工程师', 100);

	//public 的属性和方法可以在外部直接访问
	echo '<br> name = ' . $p1->name;
	$p1->getName();

	//protected 的属性和方法不可以在外部直接访问

	//echo '<br> job = ' . $p1->job;
	//$p1->getJob();

	$p1->test();

	//private 的属性和方法不可以在外部直接访问
	
	//echo '<br> salary = ' . $p1->salary;
	//$p1->getSalary();

	$p1->test2();
