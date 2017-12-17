<?php
	header( "content-type:text/html;charset=utf-8" );
	class Computer {
		public function run ( Usb $device ) {
			$device->connect();
		}
	}
	class Dvi {
		public function connect () {
			echo "dvi连接成功<br/>";
		}
	}
	class Ps2 {
		public function connect () {
			echo "Ps2连接成功<br/>";
		}
	}
	class Usb {
		public function connect () {
			echo "Usb连接成功<br/>";
		}
	}

	$c = new Computer();
	// $c->run( new Ps2() );
	// $c->run( new Usb() );
	$c->run( new Dvi() );



?>
