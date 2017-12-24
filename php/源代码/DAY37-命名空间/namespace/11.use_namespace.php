<?php
namespace itbull\php;

require_once '9.fullprefix_namespace.php';
//use itbull\web; //没有取别名，默认就是web
use itbull\web as w;

//要想导入空间，先把9.fullprefix_namespace.php文件加载到当前文件，再导入
//new web\Beauty();
new w\Beauty();