<?php
	header('content-type:text/html;charset=utf-8');
	//__unset 和 __isset

	class Cat{
		public $name;
		private $food;

		public function __construct($name, $food){
			$this->name = $name;
			$this->food = $food;
		}

		//魔术方法
		//$pro_name 是 属性名
		public function __isset($pro_name){
			//echo '<br> pro_name = ' . $pro_name;

			if(property_exists($this, $pro_name)){
				return true;
			}else{
				return false;
			}
		}

		//魔术方法
		//$pro_name 是 属性名
		public function __unset($pro_name){
			
			if(property_exists($this, $pro_name)){
				//unset 该属性
				unset($this->$pro_name);
			}else{
				echo '属性不存在，无法unset';
			}
		}
	}


	$cat1 = new Cat('波斯猫', '<。)#)))≦');

	//判断name 属性是否存在
	if(isset($cat1->name)){
		echo '<br> name 属性是存在的';
	}

	//判断name 属性是否存在
	//因为 food 是私有属性，因此会自动的调用 __isset魔术方法
	if(isset($cat1->food)){
		echo '<br> food 属性是存在的';
	}

	//如果我们希望销毁对象的某个属性

	//如果销毁的成员属性，是public的，可以直接销毁即可
	unset($cat1->name);
	echo '<pre>';
	var_dump($cat1);

	if(isset($cat1->name)){
		echo '<br> name 有了';
	}

	//如果销毁的成员属性，是protected 或者 private的，就不可以直接unset
	//这时，系统就会触发 __unset魔术方法
	unset($cat1->food);
	echo '<br>------<br><pre>';
	var_dump($cat1);


