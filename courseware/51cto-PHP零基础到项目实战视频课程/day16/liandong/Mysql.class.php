<?php
	

	class Mysql {
		public $dbHost;
		public $dbUser;
		public $dbPwd;
		public $dbName;

		public function __construct ( $h, $u, $p, $db ) {
			$this->dbHost = $h;
			$this->dbUser = $u;
			$this->dbPwd = $p;
			$this->dbName = $db;
			if ( $this->connect() ) {
				// echo "connect ok";
				$this->selectDb();
				$this->setDbCode();
			}else {
				echo "connect error";
			}
		}

		public function selectDb () {
			mysql_select_db( $this->dbName );
		}

		public function setDbCode () {
			mysql_query( "set names utf8" );
		}

		public function connect () {
			return mysql_connect( $this->dbHost, $this->dbUser, $this->dbPwd );
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

		//INSERT INTO 表名称( 字段1,字段2,...n) VALUES (值1,值2....n);
		/*
			INSERT INTO message ( title, content ) VALUES ( "test", "test123" )
			$msgInfo = array(
				"title" => "test",
				"content" => "test123",
			);
		 */
		public function add ( $tbName, $data ) {
			$sql = "INSERT INTO $tbName ";
			$sql .= "(" . implode( ",", array_keys( $data ) ) . ")";
			$sql .= "VALUES ('" . implode( "','", array_values( $data ) ) .  "')";
			return $this->query( $sql );
		}

		//UPDATE message SET title = 'aaaaaa', content='bbbb' WHERE message_id = 3
		public function update ( $tbName, $data, $condition ) {
			$sql = "UPDATE $tbName SET ";
			foreach ( $data as $k => $v ) {
				$sql .= $k . " = '" . $v . "',";
			}
			$sql = substr( $sql, 0, -1 );
			$sql .= " " . $condition;
			return $this->query( $sql );
		}


	}
	$mysql = new Mysql( "localhost", "root", "root", "ecshop_demo" );
?>
