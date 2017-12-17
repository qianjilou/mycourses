<?php
	// class Bank {
	// 	public $money = 1000;	
	// }

	// $b = new Bank();
	// echo $b->money;
	// $b->money = 0;
	// echo $b->money;

	class Bank {
		private $money = 1000;
		public function getMoney () {
			return $this->money;
		}
	}
	$b = new Bank();
	// echo $b->money . "<br/>";
	echo $b->getMoney();


?>