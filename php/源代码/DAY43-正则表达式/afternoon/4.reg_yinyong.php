<?php
//结巴一时着急，说了如下：
$str = '开开开开不不起起起起起';
//2. 定义规则，
$reg = '/[\x{4e00}-\x{9fa5}]{5}/u'; //5个中文

preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);

