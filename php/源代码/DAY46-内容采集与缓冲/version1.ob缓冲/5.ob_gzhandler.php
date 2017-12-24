<?php
//使用ob_gzhandler处理的
ob_start('ob_gzhandler');
echo str_repeat('helloworld<br>', 5000);
