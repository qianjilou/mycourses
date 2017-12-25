<?php
//休眠10秒
sleep(10);
//服务器端如果接收的是文件的话
//echo '<pre>';
//var_dump($_FILES);
//将临时文件移动到服务器的目录中
//参数1：临时的文件名
//参数2：目的地文件名
//上传成功返回true，失败返回false
$destination = 'uploads/amao.jpg';
if(move_uploaded_file($_FILES['user_pic']['tmp_name'], $destination)){
    echo '上传成功';
}else{
    echo '上传失败';
}