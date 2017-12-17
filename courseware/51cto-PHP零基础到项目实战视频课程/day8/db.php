<?php
	
	$link = mysql_connect( "localhost", "root", "root" );
	// if ( $link ) {
	// 	echo "connect ok";
	// }else {
	// 	echo "connect error";
	// }	

	mysql_select_db( "2016php0314" );
	mysql_query( "set names utf8" );

	// $sql = "INSERT INTO message( title, content ) VALUES ( 'cccccc', 'ddddd' )";
	// $result = mysql_query( $sql );
	// if ( $result ) {
	// 	echo "insert ok <br/>";
	// }

	// if ( !empty( $_GET['act'] ) && $_GET['act'] == 'del' ) {
	// 	$sql = "DELETE FROM message where message_id = " . $_GET['id'];
	// 	mysql_query( $sql );
	// }

	$sql = "UPDATE message SET title = 'ddd', content = 'eeee' WHERE message_id = 3";
	$res = mysql_query( $sql );
	var_dump( $res );

	$sql = "SELECT * FROM message";
	$res = mysql_query( $sql );
	
	// $arr = array();	
	// while ( $row = mysql_fetch_assoc( $res ) ) {
	// 	echo $row['title'] . '---' . $row['content'] . "<br/>";
	// }

	// while ( $row = mysql_fetch_row( $res ) ) {
	// 	echo $row[0] . '---' . $row[1] . "<br/>";
	// }

	// while ( $row = mysql_fetch_array( $res, MYSQL_BOTH ) ) {
	// 	echo $row[0] . '---' . $row[1] . "<br/>";
	// 	echo $row['message_id'] . '---' . $row['title'] . "<br/>";
	// }


	// while ( $obj = mysql_fetch_object( $res ) ) {
	// 	// echo $obj->message_id . "<br/>";
	// 	// echo $obj->title. "<br/>";
	// 	echo $obj->content. "<br/>";
	// }


	while ( $row = mysql_fetch_assoc( $res ) ) {
		echo $row['title'] . '---' . "<a href='?id={$row['message_id']}&act=del'>" . "删除" . "</a>";
		echo "<br/>";
	}













?>