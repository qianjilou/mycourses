<?php

	//header���ͷ��Ϣ����ʾ�������������Ҫʹ��utf-8��ʾ
	//header("content-type:text/html;charset=utf-8");
	//����
	$age = 100;

	//���������Բ鿴һ���������������ͺʹ�С
	var_dump($age);

	//С��
	$salary = 25000.55;

	var_dump($salary);
	echo $salary;

	$is_open = false;
	var_dump($is_open);

	$str = "hello,world�������!";
	//$str ��length��ʾ�ĳ���.
	var_dump($str);
	//����� php�ļ��У���ʾ��ȷ�����ı���
	//1. ������<meta charset="utf-8">
	//2. header("content-type:text/html;charset=utf-8");
	//һ�����ģ����ٸ��ֽ� �����ı�����utf-8 ,һ��������3���ֽ�
	//�����ı�����gbk/gb2312 ,һ��������2���ֽ�

