<?php
	header( "content-type:text/html;charset=utf-8" );

	class Computer {
		public function run ( $device ) {
			$device->connect();
		}
	}

	class Ps2 {
		public function connect () {
			echo "ps2连接成功<br/>";	
		}
	}

	class Usb {
		public function connect () {
			echo "usb连接成功<br/>";
		}
	}

	class Dvi {
		public function connect () {
			echo "dvi连接成功<br/>";
		}
	}

	$c = new Computer();
	$c->run( new Ps2() );
	$c->run( new Usb() );
	$c->run( new Dvi() );






?>