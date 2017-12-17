<?php
	header( "content-type:text/html;charset=utf-8" );

	class Computer {
		public function run ( Device $device ) {
			$device->connect();
		}
	}

	class Device {
		public function connect() {

		}
	}

	class Ps2 extends Device {
		public function connect () {
			echo "ps2连接成功<br/>";
		}	
	}

	class Dvi extends Device {
		public function connect () {
			echo "dvi连接成功<br/>";
		}	
	}
	class Usb extends Device {
		public function connect () {
			echo "usb连接成功<br/>";
		}	
	}

	$c = new Computer();
	$c->run( new Ps2() );
	$c->run( new Dvi() );
	$c->run( new Usb() );








?>