<?php
//自定义的模板引擎
class MyTpl
{
    //该属性保存分配的数据
    private $tpl_vars = [];
    public function assign($k,$v)
    {
        $this->tpl_vars[$k] = $v;
    }
    public function display($filename)
    {
        //require_once 返回值是true、false
        //$file = require_once $filename;
        $content = file_get_contents($filename);
        
        //将里面的占位符替换成真实的数据
        foreach ($this->tpl_vars as $k=>$v){
            $content = str_replace('{$'.$k.'}', $v, $content);
        }
        //var_dump($new_content);
        //将替换好的内容写入到一个文件中
        $file = 'tpl_c/'.mt_rand(1000,9999).md5($filename).'.php';
        file_put_contents($file, $content);
        //显示新的文件的内容
        require_once $file;
    }
}
$tpl = new MyTpl();

$tpl -> assign('name','李四');
$tpl -> assign('age',30);
$tpl -> assign('sex','female');

$tpl -> display('tpl/2.my_tpl.html');