<?php
	header("content-type:text/html;charset=utf-8");
	class  Monk{
		public $name;
		//.....
		private function mySort(&$arr){
			echo '<br> 和尚排序';
		}

		private function arrMerge($arr1, $arr2){
			echo '<br> 和尚合并数组...';
		}

		private function arrSearch($arr, $find_val){
			echo '<br> 和尚查找...';
		}

		//魔术
		public function __call($method_name, $args){
			
			if($method_name == 'play'){
				if(count($args) == 1){
					$this->mySort($args[0]);
				}else if(count($args) == 2){
					//合并
					if(is_array($args[0]) && is_array($args[1])){
						$this->arrMerge($args[0], $args[1]);
					}else if(is_array($args[0]) && is_numeric($args[1])){

						//查找
						$this->arrSearch($args[0], $args[1]);
					}
				}
			}
		}
	}

	$monk1 = new Monk();
	$arr = array(78, 90, 9);
	$monk1->play($arr);

	$arr1 = array(90,9);
	$arr2 = array(90,92);
	$monk1->play($arr1, $arr2);
	$monk1->play($arr1, 80);