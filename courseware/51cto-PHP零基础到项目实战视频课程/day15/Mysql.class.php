<?php
	// session_start();
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
			echo $sql;
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
	
?>