
//将这段代码，封装成一个函数
/**
	@num1 代表一个形参(形式参数)
	@num2 代表一个形参(形式参数)
	@oper 代表一个形参(形式参数)
	jiSuan ： 表示函数名
	function: 一个关键字
*/
function jiSuan(num1, num2, oper)
{
	
	var res = 0;
	switch(oper)
	{
		case "+":
			res = num1 + num2;
			break;
		case "-":
			res = num1 - num2;
			break;
		case "*":
			res = num1 * num2;
			break;
		case "/":
			res = num1 / num2;
			break;
		default:
			document.write("请输入正确的操作符号");
	}

	document.write("res = " + res);
}