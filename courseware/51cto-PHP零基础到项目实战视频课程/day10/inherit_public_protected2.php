<?php
	class Person {
		public $name = "张三";
		protected $phone = "123456789";
		public function showName () {
			echo "我的名字叫:" . $this->name . "<br/>";
		}
			
	}
	class Student extends Person {
		public $name = "张三毛";
		//新增属性
		public $realName = "张三";
		//重写方法
		// public function showName () {
		// 	echo "我的真名叫:" . $this->realName . "<br/>";
		// }
		//权限只能放大,不能缩小
		protected function showName () {
			echo "我的真名叫:" . $this->realName . "<br/>";
		}
		//新增方法
		public function showPhone () {
			echo $this->phone;
		}
	}
	$stu = new Student();
	// echo $stu->name . "<br/>";
	// echo $stu->realName;
	$stu->showName();
	// $stu->showPhone();

?>

