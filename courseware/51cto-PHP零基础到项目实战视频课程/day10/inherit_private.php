<?php
	header( "content-type:text/html;charset=utf-8" );

	class King {
		private $wife = "皇后";
		public function showWife () {
			echo $this->wife . "<br/>";
		}
	}

	class Prince extends King {
		private $wife = "太子妃"; 
		public function showWife2 () {
			echo $this->wife;
		}
	}


	// $k = new King();
	// $k->showWife();

	$p = new Prince();
	// print_r( $p );
	$p->showWife2();



?>


