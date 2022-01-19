<?php
	header("content-type:text/html;charset=utf-8");
	//序列化的练习
	/*
	小作业:
创建Student类( 名字，年龄，学校[对象] )
创建School 类(名字，地址)
创建一个学生对象，学校对象, 并给属性赋值
把学生对象保存 c:\objs\
可以读取出文件，并回复学生对象

	*/
	
	class Student{
		public $name;
		public $age;
		public $school;
		public function __construct($name, $age, $school){
			$this->name = $name;
			$this->age = $age;
			$this->school = $school;
		}
	}

	class School{
		public $name;
		public $address;
		public function __construct($name, $address){
			$this->name = $name;
			$this->address = $address;
		}
	}

	//创建一个学校
	$school = new School('泰牛程序员', '唐家岭');
	$stu = new Student('小健', 20, $school);
	
	//序列化
	file_put_contents('d:/stu.txt', serialize($stu));
	echo '序列化成功!';




