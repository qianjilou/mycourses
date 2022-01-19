-- 创建数据库
create database mes charset=utf8;
-- 选择数据库
use mes;
-- 创建留言信息表
create table mes_info(
id int auto_increment comment 'id',
title varchar(20) not null comment '标题',
content text not null comment '内容',
addtime varchar(20) not null comment '添加时间',
primary key(id)
)charset=utf8;


-- 创建用户表
create table admin(
id int auto_increment,
user_name varchar(20) not null,
pass_word varchar(20) not null,
primary key(id)
)charset=utf8;

-- 初始化一个管理员用户   md5('admin');  --->  32位的字符串
insert into admin values(default,'admin','admin');  