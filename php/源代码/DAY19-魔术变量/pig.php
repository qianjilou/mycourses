<?php
	ob_start();
	
	$num2 = isset($_POST['num2'])?$_POST['num2']:'';
	$num3 = isset($_POST['num3'])?$_POST['num3']:'';
	//echo $num2;
	class Pig{
	public $name;
	public $weight;
	public $age;
	public $color;

		public function __construct($name,$weight,$age,$color)
		{
			$this->name = $name;
			$this->weight = $weight ;
			$this->age = $age;
			$this->color = $color;

		}
		public function showInfo()
		{
			echo '波斯猪的信息如下'.'<br>';
			echo '名字：'.$this -> name.'<br>';
			echo '体重：'.$this -> weight.'<br>';
			echo '年龄：'.$this -> age.'<br>';
			echo '颜色：'.$this -> color.'<br>';
		}
		public function add($n)
		{
			$this->weight += $n;
		}

		public function sub($x)
		{
			$this->weight -= $x;
		}

		public function jzt($n)
		{
			for($i = 1; $i <= $n; $i++)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					echo '*';
				}
				echo '<br>';
			}
		}

		public function kx($n)
		{
			for($i = 1; $i <= $n; $i++)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					if($j == 1 || $j==$i*2-1 || $i == $n)
					{
						echo '*';
					}else
					{
						echo '_';
					}
				}
				echo '<br>';
			}
		}

		public function lx($n)
		{
			for($i = 1; $i <= $n; $i++)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					echo '*';
				}
				echo '<br>';
			}
			for($i = $n-1; $i >= 0; $i--)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					echo '*';
				}
				echo '<br>';
			}
		}

		public function kxlx($n)
		{
			for($i = 1; $i <= $n; $i++)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					if($j == 1 || $j==$i*2-1)
					{
						echo '*';
					}
					else{
						echo '_';
					}
				}
				echo '<br>';
			}
			for($i = $n-1; $i >= 0; $i--)
			{
				for($k = $n; $k >= $i; $k-- )
				{
					echo '_';
				}
				for($j = 1; $j < $i*2; $j++)
				{
					if($j == 1 || $j==$i*2-1)
					{
						echo '*';
					}
					else{
						echo '_';
					}
				}
				echo '<br>';
			}
		}

		//返回该猪的当前的体重
		

	}
	
	//先判断是否有文件了
	if(file_exists('d:/temp.txt')){
		
		//从这个文件中，读取出这个体重，然后创建这只猪
		$weight = file_get_contents('d:/temp.txt');
		$pig = new Pig('波斯猪',$weight,998,'金色');
	}else{
		$pig = new Pig('波斯猪',888,998,'金色');
	}

	

	
	
	
	//var_dump($pig);
	
	$pig -> add($num3);//增加30；
	//var_dump($pig);
	
	$pig -> sub($num2);//体重减去90；
	//var_dump($pig);
	//把 这个猪的体重保存起来, 保存到文件中.
	file_put_contents('d:/temp.txt', $pig->weight);
	

	$pig -> jzt(4);
	echo '<hr>';
	$pig -> kx(4);
	echo '<hr>';
	$pig -> lx(4);
	echo '<hr>';
	$pig -> kxlx(4);
	echo '<hr>';

	//echo '波斯猪的信息:'.$pig -> name.'的体重是'.$pig -> weight.'KG,年龄'.$pig -> age.'岁,颜色'.$pig -> color;
	$pig -> showInfo();
	echo '<hr>';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="#" method="post">

	<input type="text"  name="num2"><input type="submit" value="减少"><hr>
	<input type="text"  name="num3"><input type="submit" value="增加">


 	</form>
 </body>
 </html>