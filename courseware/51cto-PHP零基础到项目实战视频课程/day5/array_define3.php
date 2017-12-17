<?php
	header( "content-type:text/html;charset=utf-8" );

	$userInfo = array(
		"hr" => array(
			array( "name" => "唐僧", "sex" => "男", "age" => 2000 ),
			array( "name" => "悟空", "sex" => "男", "age" => 3000 ),
			array( "name" => "八戒", "sex" => "男", "age" => 4000 ),
		),
		"customer" => array(
			array( "name" => "刘备", "sex" => "男", "age" => 300 ),
			array( "name" => "关羽", "sex" => "男", "age" => 302 ),
			array( "name" => "张飞", "sex" => "男", "age" => 303 ),
		),
		"sale" => array(
			array( "name" => "宋江", "sex" => "男", "age" => 200 ),
			array( "name" => "李逵", "sex" => "男", "age" => 201 ),
			array( "name" => "武松", "sex" => "男", "age" => 202 ),
		),
	);

	// print_r( $userInfo );
	
	// echo $userInfo["hr"][0]["age"];
	// echo $userInfo["customer"][0]["name"];
	// echo $userInfo["sale"][0]["name"];


	// $userInfo["sale"][0]["name"] = "及时雨";
	// print_r( $userInfo );










?>