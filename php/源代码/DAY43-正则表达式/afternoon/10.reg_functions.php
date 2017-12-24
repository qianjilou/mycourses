<?php
$str = 'helloworld,helloasia!hellochina';

$reg = '/[,!]/';    //先根据规则进行查找分割的字符，再拆分

$result = preg_split($reg, $str);

echo '<pre>';
var_dump($result);