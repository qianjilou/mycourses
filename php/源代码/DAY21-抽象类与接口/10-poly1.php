<?php
	header("content-type:text/html;charset=utf-8");
	//多态

	//创建Animal
	class Animal {
		public $name;
		public function __construct($name){
		
			$this->name = $name;
		}
	}

	class Cat extends Animal{

		public function showInfo(){
			echo 'Cat 我是' . $this->name; 
		}
	}

	class Dog extends Animal{
		public function showInfo(){
			echo 'Dog 我是' . $this->name; 
		}
	}

	class Sheep extends Animal{
		public function showInfo(){
			echo 'Sheep 我是' . $this->name; 
		}
	}

	//创建食物
	class Food{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
	}

	class Fish extends Food{
		public function showInfo(){
			echo  'Fish showInfo()' . $this->name; 
		}
	}

	class Bone extends Food{
		public function showInfo(){
			echo  'Bone showInfo()' . $this->name; 
		}
	}

	class Grass extends Food{
		public function showInfo(){
			echo  'Grass showInfo()' . $this->name; 
		}
	}

	class Master{
		//这里就体现了多态特点.
		public function  feed(Animal $animal , Food $food){
			$animal->showInfo();
			echo '喜欢吃';
			$food->showInfo();
		}
	}

	//创建食物和动物
	$fish = new Fish('鱼肉');
	$bone = new Bone('一根骨头');
	$grass = new Grass('青草');

	$dog = new Dog('小狗');
	$cat = new Cat('小猫');
	$sheep = new Sheep('绵羊');
	
	//创建一个主人对象
	$master  = new Master;
	$master->feed($dog, $bone);
	echo '<br>';
	$master->feed($cat, $fish);
	echo '<br>';
	//$master->feed($fish, $cat);

	$master->feed($sheep, $grass);



