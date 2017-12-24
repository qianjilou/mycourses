<?php
	header('content-type:text/html;charset=utf-8');

	/*
	共有属性
	账号号码, 密码, 
	余额

	共有行为
	存款，取款，
	查询，转账..

	*/

	class Account{
		public $accountNo;
		private $pwd;
		private $balance;

		//构造函数
		public function __construct($accountNo, $pwd = '888888', $balance = 0.0){
			$this->accountNo = $accountNo;
			$this->pwd = $pwd;
			$this->balance = $balance;
		}

		//存款
		public function saveMoney($pwd, $amount){

			//判断输入密码是否正确
			if($pwd == $this->pwd && $amount > 0.0 ){
				//存钱
				$this->balance += $amount;
				echo '<br> 存款成功!';
			}else{
				
				echo '<br> 密码不正确或者金额有问题!';
			}
		}

		//取款
		public function getMoney($pwd, $amount){

			//判断密码和金额是否正确
			if($pwd != $this->pwd){
				
				echo '<br> 密码不正确';
				return;
			}
			if($this->balance < $amount){
				echo '<br> 余额不足..';
				return;
			}

			$this->balance -= $amount;

			echo '<br> 取款成功!';

		}

		//查询余额
		public function query($pwd){
			
			if($pwd == $this->pwd){
				echo '<br> 你的账号'  . $this->accountNo . ' 余额是 ' . $this->balance;
			}else{
				echo '<br> 你输入的密码有问题, 请重新输入..';
			}
		}
	}

	$account = new Account('gsh-000001', '123456', 20000000);

	$account->query('123456');

	//取款
	$account->getMoney('123456', 20);

	$account->query('123456');

	//存款
	$account->saveMoney('123456', 20);

	$account->query('123456');