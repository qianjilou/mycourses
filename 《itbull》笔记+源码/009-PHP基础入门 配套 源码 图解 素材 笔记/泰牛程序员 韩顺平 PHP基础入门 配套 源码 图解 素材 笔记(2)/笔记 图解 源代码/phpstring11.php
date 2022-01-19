<?php
	//单引号
	header("content-type:text/html;charset=utf-8");
	$a = 10;
	
	// 对于单引号而言，如果含有变量，他不会解析显示这个变量的值
	$str = 'ABC,hello $a';
	echo $str;


	// 对于双引号而言，如果含有变量，他会解析显示这个变量的值
	$str2 = "ABC, hello $a $a $a";
	echo '<br>' . $str2;

	// 加强，如果我们在双引号中带的变量，相对复杂，请使用{$变量}
	$str2 = "ABC, hello {$a} {$a} {$a}";
	echo '<br>' . $str2;

	//heredoc使用字符串方式 html代码
	//使用注意
	//1. <<< 固定 STR名 可以变化,一般说就是全部大写
	//2. <<<标识符 后面不能带任何内容，包括空格
	//3. 结束的标识符 前面不能有空格,即要放在最前面
	//4. heredoc 可以解析变量
	$str3 = <<<ADDRESS
hello,world!hsp{$a}
百度.
ADDRESS;
	echo '<br>' . $str3;