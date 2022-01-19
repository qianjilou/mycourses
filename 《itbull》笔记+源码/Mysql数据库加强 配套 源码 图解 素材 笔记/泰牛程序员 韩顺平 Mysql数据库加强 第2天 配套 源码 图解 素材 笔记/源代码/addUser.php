<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> 添加用户 </title>
  
  <script type="text/javascript">

	//编写js 的 checkForm
	function checkForm(){
		//获取用户输入的 num1 和  num2
		var id = document.getElementById('id').value;
		var name = document.getElementById('name').value;	
		var chinese = document.getElementById('chinese').value;	
		var math = document.getElementById('math').value;	
		var english = document.getElementById('english').value;	
		//如果为空就提示信息，并返回false
		if(id == '' ||  name == '' || chinese == '' || math == '' || english == ''){
			alert('输入不能为空');
			return false;
		}else if(isNaN(id) || isNaN(chinese) || isNaN(math) || isNaN(english)){
			//我们在判断num1 和 num2是不是一个数 isNaN(num1) ,如果num1不是一个数，就返回true
			alert('输入的不是数值，请重新输入!');
			return false;
		}else{
			return true;
		}
	}

  </script>
 
 </head>
 <body>
  <h1>添加用户界面</h1>
  <form action='addAction.php' method='post' onsubmit='return checkForm()'>
  <table border='1px' width='400px'>
  <tr><td>学生id</td><td><input type='text' name='id' id='id'/></td></tr>
  <tr><td>学生名字</td><td><input type='text' name='name' id='name'/></td></tr>
  <tr><td>语文成绩</td><td><input type='text' name='chinese' id='chinese'/></td></tr>
  <tr><td>数学成绩</td><td><input type='text' name='math' id='math'/></td></tr>
  <tr><td>英语成绩</td><td><input type='text' name='english' id='english'/></td></tr>
  <tr><td><input type='submit' /></td><td><input type='reset'/></td></tr>
  </table>
  </form>
 </body>
</html>
