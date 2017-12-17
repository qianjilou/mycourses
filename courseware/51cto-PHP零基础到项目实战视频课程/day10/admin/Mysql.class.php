<?php
	class Mysql {		
		public $dbHost;
		public $dbUser;
		public $dbPwd;
		public $dbName;
		
		public function __construct ( $h, $u, $p, $db_name ) {
			$this->dbHost = $h;
			$this->dbUser = $u;
			$this->dbPwd = $p;
			$this->dbName = $db_name;
			if ( $this->connect() ) {
				$this->setDbCode();
				$this->selectDb();				
			} else {
				die( "数据库连接失败" );
			}
		}
		
		public function connect () {
			return mysql_connect( $this->dbHost, $this->dbUser, $this->dbPwd );
		}
		
		public function setDbCode () {
			mysql_query( "set names utf8" );
		}
		
		public function selectDb() {
			mysql_select_db( $this->dbName );
		}
		
		public function query( $sql ) {
			return mysql_query( $sql );
		}
		
		public function getAll( $sql ) {
			$res = $this->query( $sql );
			$arr = array();
			while ( $row = mysql_fetch_assoc( $res ) ) {
				$arr[] = $row;
			}
			return $arr;
		}
		
		public function getRow ( $sql ) {
			$res = $this->query( $sql );
			return mysql_fetch_assoc( $res );
		}
		
		public function getCol ( $sql ) {
			$res = $this->query( $sql );
			$row = mysql_fetch_row( $res );
			return $row[0];
		}
		
		public function add ( $tbName, $data ) {
			$sql = "INSERT INTO {$tbName}";
			$sql .= "(" . implode(',', array_keys( $data ) ) . ") VALUES ('";
			$sql .= implode( "','", array_values( $data ) ) . "')";			
			return $this->query( $sql );
		}
		
		public function update ( $tbName, $data, $condition ) {
			$sql = "UPDATE {$tbName} SET ";
			foreach ( $data as $k => $v ) {
				$sql .= $k . "='" . $v . "',";
			}
			$sql = substr( $sql, 0, -1 );
			$sql .= " " . $condition;
			return $this->query( $sql );
		}
	}
	
	$mysql = new Mysql( "localhost", "root", "root", "php0314" );
	//print_r( $mysql->getAll( "SELECT * FROM message" ) );
	//print_r( $mysql->getRow( "SELECT * FROM message WHERE message_id = 7" ) );
	//echo $mysql->getCol( "SELECT COUNT(*) AS total_nums FROM message" );
	// $data = array(
	// 	'title' => 'title1234123',
	// 	'content' => 'content12341234',
	// );
	// $res = $mysql->update( 'message', $data, 'WHERE message_id = 8' );
	// if ( $res ) {
	// 	echo "ok";
	// } else {
	// 	echo "error";
	// }
	/*
	$res = $mysql->add( 'message', $data );
	if ( $res ) {
		echo "ok";
	} else {
		echo "error";
	}
	*/
?>