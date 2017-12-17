<?php
	header( "content-type:text/html;charset=utf-8" );

	class BankAccount {
		public $name;
		public $age;
		public $sex;
		public $province;
		public $city;

		public function __construct ( $n, $a, $s, $p, $c ) {
			$this->name = $n;
			$this->age = $a;
			$this->sex = $s;
			$this->province = $p;
			$this->city = $c;
		}	
		public function showInfo () {
			echo $this->name . ":" . $this->age . ":" . $this->sex . ":"
			. $this->province . ":" . $this->city . "<br/>";
		}
	}

	$bank = new BankAccount( "张三", 22, "男", "广东", "深圳" );
	$bank2 = new BankAccount( "李四", 23, "女", "广东", "深圳" );
	$bank3 = new BankAccount( "王五", 24, "女", "广东", "深圳" );
	$bank->showInfo();
	$bank2->showInfo();
	$bank3->showInfo();


?>