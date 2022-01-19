<?php
	header("content-type:text/html;charset=utf-8");
	//反序列化
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

	//读序列化字符串
	$stu_str = file_get_contents('d:/stu.txt');
	$stu = unserialize($stu_str);
	echo '<pre>';
	var_dump($stu);