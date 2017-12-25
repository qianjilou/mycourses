<?php
	header('content-type:text/html;charset=utf-8');
	//copy 整个目录

	//DS就是目录分隔符号
	define('DS', DIRECTORY_SEPARATOR); 



	$path='e:/hspweb';
	//这个 $desc目录可以不存在,也可以存在, 会把 e:/hspweb/ 目录
	//下的所有文件及其子目录拷贝到 指定目录 $desc下 [注:只含e:/hspweb本身这个目录名]
	$dest='d:/mymvc';

	copy_r($path,$dest);
	echo 'ok';

	//$path 源目录 $dest 目标目录
    function copy_r( $path, $dest )
    {
        if( is_dir($path) )
        {
			//创建目标目录
            @mkdir( $dest );
            
			//scandir 就是获取到$path目录下的所有的文件和目录
			//放入 $objects 中，他是组数
			$objects = scandir($path);
            


			if( sizeof($objects) > 0 )
            {
                foreach( $objects as $file )
                {
                    if( $file == "." || $file == ".." )
                        continue;
                    // go on
                    if( is_dir( $path.DS.$file ) )
                    {
                        copy_r( $path.DS.$file, $dest.DS.$file );
                    }
                    else
                    {
                        copy( $path.DS.$file, $dest.DS.$file );
                    }
                }
            }
            return true;
        }
        elseif( is_file($path) )
        {
            return copy($path, $dest);
        }
        else
        {
            return false;
        }
    }
