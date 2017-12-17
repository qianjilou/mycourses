<?php
	header( "content-type:text/html;charset=utf-8" );

	class Mysql {
		public function __construct () {
			mysql_connect( "localhost", "root", "root" );	
			mysql_query( "set names utf8" );
			mysql_select_db( "php0314" );	
		}
		public function query ( $sql ) {
			return mysql_query( $sql );
		}
	}

	class DB extends Mysql {
		public function __construct () {
			parent::__construct();	
		}
	}
	$db = new Db();
	$res = $db->query( "desc message" );
	var_dump( $res );
?>