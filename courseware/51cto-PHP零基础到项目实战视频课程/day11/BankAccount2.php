<?php
	header( "content-type:text/html;charset=utf-8" );		

	class BankAccount {
		public $name;
		public $age;
		public $sex;

		public static $province = "广东";		
		public static $city = "深圳";

		public function getAddr () {
			echo BankAccount::$province . ":" . BankAccount::$city . "<br/>";
		}

		public function changeAddr () {
			BankAccount::$province = "江西";
			BankAccount::$city = "南昌";
		}	
	}

	// BankAccount::getAddr();
	// echo BankAccount::$province;
	// echo BankAccount::$city;

	$bank1 = new BankAccount();
	$bank2 = new BankAccount();
	$bank3 = new BankAccount();
	$bank1->getAddr();
	$bank1->changeAddr();
	$bank2->getAddr();
	$bank3->getAddr();







?>