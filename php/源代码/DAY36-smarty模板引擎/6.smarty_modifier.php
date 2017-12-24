<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//真实的数据，可能是通过表单提交过来的
$script = '<script>
    for(var i=0;i<10;i++){
        alert("hello world");
    }
</script>';
$smarty -> assign('script',$script);

$book = '天龙八部';
$smarty -> assign('book',$book);

//utf8编码下一个中文占3字节，英文字符占1个字节
$str = '天龙八部zhenhaokan';
$smarty -> assign('str',$str);
$smarty->assign('articleTitle', 'Two Sisters Reunite after Eighteen Years at Checkout Counter.');


$smarty -> display('templates/6.temp_modifier.html');