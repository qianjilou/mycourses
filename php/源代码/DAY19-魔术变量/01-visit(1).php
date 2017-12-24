<?php
	header('content-type:text/html;charset=utf-8');
	//访问控制修饰符的介绍

	class Clerk{
		
		public $name;
		protected $salary;
		private $lover;

		//构造函数
		public function __construct($name, $salary, $lover){
			$this->name = $name;
			$this->salary = $salary;
			$this->lover = $lover;
		}

		//访问proteced属性
		public function getSalary(){
			return $this->salary;
		}

		public function getLover(){
			return $this->lover;
		}
	}

	//创建一个职员
	$clerk1  = new Clerk('白骨精', 20000, '唐僧');

	//访问各个属性

	//1. 如果访问修饰符是 public ,则可以直接访问.

	echo '<br> 名字是 ' . $clerk1->name;

	//2. 如果访问修饰符是 protected ,不可以直接访问 
	//   我们可以编写一个public 的成员方法，来操作protected属性
//	echo '<br> 薪水 ' . $clerk1->salary;
	echo '<br> 薪水是' . $clerk1->getSalary();

	//3. 如果访问修饰符是 private ,不可以直接访问 
	//   我们可以编写一个public 的成员方法，来操作private属性

//	echo '<br> 情人 ' . $clerk1->lover;
	echo '<br> 情人是 ' . $clerk1->getLover();
