<?php
ob_start();
echo 'aaaaa<br>';


ob_start();
echo 'bbbbb<br>';
ob_clean(); //清空最近的缓冲区域

ob_start();
echo 'ccccc<br>';
