<?php
	header("content-type:text/html;charset=utf-8");
		class A{			
			protected $num1="100";
			protected $num2="200";
			public $num3="300";
			public function show1(){
				echo "<br/> num3=".$this->num3; // 300.
			}
			protected function show2(){
				echo "<br/> num2=".$this->num2;
			}
			protected function show3(){
				echo '<pre>';
				var_dump($this);
				echo "<br/> num1=".$this->num1;
			}
		}
		class B extends A{		
			public $num1="1";
			protected $num2="2";
			public $num3="3";
			public function show1(){
				echo "num3=".$this->num3; //3
				parent::show1();		
			}
			public function show2(){
				echo "num2=".$this->num2;
				parent::show2();
			}
			public function show3(){
				echo '<pre>';
				var_dump($this);
				echo "num1=".$this->num1;
				parent::show3();
			}
		}
		$b = new B();
		echo '<pre>';
		var_dump($b);
		//$b->show1(); // 3 , 3
		//$b->show2(); // 2 , 2
		$b->show3(); // 1, 100? 
