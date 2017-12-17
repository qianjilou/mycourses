<?php
	header( "content-type:text/html;charset=utf-8" );

	// class BankAccount {
	// 	public static $city = "深圳";
	// 	public function showCity () {
	// 		// echo BankAccount::$city . "<br/>";
	// 		echo self::$city . "<br/>";
	// 	}
	// }

	// $bankAccount = new BankAccount();
	// $bankAccount->showCity();

	// class BankAccount2 extends BankAccount {
	// 	public function showCity2 () {
	// 		// echo BankAccount::$city . "<br/>";
	// 		echo parent::$city . "<br/>";
	// 	}	
	// }

	// $bankAccount2 = new BankAccount2();
	// $bankAccount2->showCity2();

	class ECS_BankAccount {
		public static $city = "深圳";
		public function showCity () {
			// echo BankAccount::$city . "<br/>";
			echo self::$city . "<br/>";
		}
	}

	$bankAccount = new ECS_BankAccount();
	$bankAccount->showCity();

	class ECS_BankAccount2 extends ECS_BankAccount {
		public function showCity2 () {
			// echo BankAccount::$city . "<br/>";
			echo parent::$city . "<br/>";
		}	
	}

	$bankAccount2 = new ECS_BankAccount2();
	$bankAccount2->showCity2();




	

?>