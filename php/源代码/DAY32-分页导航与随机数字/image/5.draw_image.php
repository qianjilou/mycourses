<?php
//1. 绘制图像资源（创建一个画布）
$image = imagecreatetruecolor(500, 300);
//2. 先分配一个绿色
$green = imagecolorallocate($image, 22, 153, 0);
//3. 使用绿色填充画布
imagefill($image, 0, 0, $green);

//4. 在画布中绘制图像
$bai = imagecolorallocate($image, 255, 255, 255);
//参数1：$dst_img  destination，目标图像资源
//参数2：$src_img  原图资源,通过imagecreatefromjpeg png等创建的
//参数3、4：目标图像资源的x、y坐标
//参数5、6：原图采集的起点x、y坐标
//参数7、8：原图的宽度、高度
$src_img = imagecreatefrompng('bs.png');
//通过php的函数imagesx()获得图像资源的宽度、imagesy()获得图像资源的高度
$src_w = imagesx($src_img);
$src_h = imagesy($src_img);
imagecopy($image, $src_img, 0,0, 0,0, $src_w, $src_h);

//5. 在浏览器直接输出图像资源
header("Content-Type:image/jpeg");
imagejpeg($image);

//6. 销毁图像资源
imagedestroy($image);