### 1.js代码三种书写方式  
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>js代码三种书写方式</title>
	<script src="main.js"></script><!-- 1.外部引入 -->
</head>
<body>
	<script>
	// 2.页面script方法
		alert("你好!");
	</script>

<input type="button" value="点我" onclick="alert('大家好')">
<!-- 3.行间事件触发 -->
</body>
</html>
```
---
### 2.javascript变量命名&使用规则
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2.javascript变量命名-使用规则</title>
</head>
<body>
<p>1、什么是变量</p>
变量是内存中用来存储数据的一块区域
<p>2、变量的命名规则</p>
1.以字母开头，如：var a;var abc;var userName;
2.以美元符号 如:var $a;
3.以下划线开头 如:var _a;
<p>3、怎么使用变量</p>
	var 变量名 =(赋值)
	<script>
		// var a =10;
		// var $abc = 20;
		// var _abc = 30;
		// alert( a );\
		// document.write('你好</br>');
		// document.write('<h3 style='color:red;'>你好</h3>');
		// console.log(a);
	</script>
</body>
</html>
```
### 3.javascript变量的类型
```javascript
//变量的类型有变量的值来决定
//弱类型语言

var age = 20;
alert(typeof age);

//对象:物体，一个东西
var a =document;
alert(typeof a);//object

var a;
alert(a);//声明变量的时候没有给值，那么它的值就是undefined
alert(typof a);//类型(undefined)；

var a = null;//本身是一个对象,但是是个空对象
alert(a);
alert(typeof null);//空对象
```
### 4.javascript多个变量的定义方式  
```javascript
var userName = "qianjilou";
var age = 20;
var sex = "男";

//alert (userName);
//alert (age);
//alert(sex);

/*
1.当加号的两边是字符串类型，那么就表示相连
2.如果两边都是数字，那就是运算
 */

alert("姓名:" + userName);//姓名:qianjilou
alert(10 + 20);//30
alert('10' + 20);//1020
//用var声明多个变量的时候，前面的变量用逗号隔开，最后的变量用分号结束
alert("姓名:" + userName + "," + "性别" + sex);


var userName = 'qianjilou',sex,age;
sex = "男";
age = 20;
alert(sex);
```
### 5.javascript算数,复合,自增与自减运算符  
```javascript
var a =10;
var b =20;
a += b;//a = a + b
a -= b;
a *= b;
a %= b;
a++;//a = a +1先使用，后运算
++a;//a = a +1先运算，后使用


var a = 10;
alert(a++);//10
alert(++a);//12
alert(a--);//12
alert(--a);//10
```
### 6.javascript比较,逻辑运算&条件判断  
```javascript
var a =10;
var b =20;

alert(a <= b);//true
alert(a === b);//flase
alert(a != b)

//判断条件
//循环类
//
```
### 7.javascript循环控制语句  
### 8.javascript二重循环,break与conti  
### 9.javascript二重循环乘法与n行n列的表格  
### 10.javascript输出一个对角线形成div  
### 11.判断素数与素数一段范围内的素数  
### 12.switdh与while和do while循环  
### 13.while循环修改素数与斜角div  
### 14.函数的定义与使用  
### 15.变量与函数作用域  
### 16.函数封装&应用  
### 17.函数封装&应用2  
### 18.函数封装&应用3  
### 19.修改样式  
### 20.读取样式与className和屏蔽空的锚  
