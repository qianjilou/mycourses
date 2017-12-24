<?php
$code = 'hello';
//可以像数组一样操作字符串
//echo strlen($code);
$length = strlen($code);

for($i=0;$i<$length;$i++){
    echo '<pre>';
    var_dump($code[$i]);
}