<?php
	header( "content-type:text/html;charset=utf-8" );

	class Mysql {
		public $dbHost;
		public $dbUser;
		public $dbPwd;
		public $dbName;

		public function __construct ( $h, $u, $p, $n ) {
			$this->dbHost = $h;
			$this->dbUser = $u;
			$this->dbPwd = $p;
			$this->dbName = $n;
			if ( $this->connect() ) {
				$this->selectDb();
				$this->setDbCode();
			}else {
				die( "数据库连接失败" );
			}
		}

		public function connect () {
			return mysql_connect( $this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName );
		}

		public function selectDb () {
			mysql_select_db( $this->dbName );
		}

		public function setDbCode () {
			$this->query( "set names utf8" );
		}

		public function query( $sql ) {
			return mysql_query( $sql );
		}

		public function getAll ( $sql ) {
			$res = $this->query( $sql );
			$list = array();	
			while ( $row = mysql_fetch_assoc( $res ) ) {
				$list[] = $row;
			}
			return $list;
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

		public function delete ( $sql ) {
			return $this->query( $sql );
		}

		public function add ( $tbName, $data ) {
			$sql = "INSERT INTO $tbName";
			$sql .= "(" . implode( ",", array_keys( $data ) ) . ") VALUES ('";
			$sql .= implode( "','", array_values( $data ) ) . "')";
			return $this->query( $sql );
		}
		public function update ( $tbName, $data, $condition ) {
			$sql = "UPDATE $tbName SET ";
			foreach ( $data as $k => $v ){
				$sql .= $k . "='" . $v . "',";
			}
			$sql = substr( $sql, 0, -1 );
			$sql .= " " . $condition;
			return $this->query( $sql );
		}
	}	

	$mysql = new Mysql( "localhost", "root", "root", "php0314" );
	// print_r( $mysql );
	// $msgList = $mysql->getAll( "SELECT * FROM message" );
	// print_r( $msgList );

	// $msgInfo = $mysql->getRow( "SELECT * FROM message WHERE message_id = 13" );
	// print_r( $msgInfo );

	// $total = $mysql->getCol( "SELECT COUNT(*) as total FROM message" );
	// echo $total;

	$res = $mysql->delete( "DELETE FROM message WHERE message_id = 2" );

	$msgInfo = array(
		'title' => "this is a test",
		'content' => "this is a test",
	);
	// $res = $mysql->add( "message", $msgInfo );
	// $res = $mysql->update( "message", $msgInfo, "WHERE message_id = 2" );
	if ( $res ) {
		echo "ok";
	}else {
		echo "error";
	}


?>