<?php
//参数是实际参数
upload($_FILES['cat_logo']);

function upload($file)
{
    // sleep(5);
    //将临时文件移动到服务器的目录中
    //参数1：临时的文件名
    //参数2：目的地文件名
    //上传成功返回true，失败返回false
    $destination = 'uploads/';
    
    //1. 限制上传文件的大小
    $maxsize = 200*1024;     //200KB
    if($file['size'] > $maxsize){
        echo '图片太大了，服务器撑不下';
        exit;
    }
    //2. 防止文件重复
    //首先生成一个唯一的随机数作为文件的名字
    //参数1：前缀
    //参数2：布尔值，如果true化，更具有唯一性
    $filename = uniqid('tn_',true);
    //确定文件的后缀
    //strrchr()用来获得一个字符串中最后一次出现的字符,返回从该字符之后的部分
    //参数1：look needle from haystack,大海捞针
    $ext = strrchr($file['name'], '.');
    $new_filename = $filename.$ext;
    
    //3. 分目录存储上传的文件
    //按照日期创建子目录
    $sub_path = date('Ymd').'/';
    //创建目录,先判断下  uploads/20170330是否存在，如果不存在则创建该目录
    if(!is_dir($destination.$sub_path)){
        mkdir($destination.$sub_path,0777,true);
    }
    $destination .= $sub_path.$new_filename;
    
    //4. 上传的文件类型是否支持
    $allow_type = array('image/jpeg','image/jpg','image/png','image/gif');
    $true_type = $file['type'];
    if(!in_array($true_type, $allow_type)){
        echo '不支持该类型的文件';
        exit;
    }
    //实例化finfo对象,用来获得一个文件的真实的类型
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type = $finfo -> file($file['tmp_name']);
    if(!in_array($type, $allow_type)){
        echo '不支持该类型的文件';
        exit;
    }
    
    if(move_uploaded_file($file['tmp_name'], $destination)){
        echo '上传成功';
    }else{
        echo '上传失败';
    }
}