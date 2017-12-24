<?php
	header('content-type:text/html;charset=utf-8');

	//Book  (书名，作者，价格[protected]，销量[private] [设置数据验证，获取提供密码])


	class Book{
		public $bookname;
		public $author;
		protected $price;
		private $saleNum;

		public function __construct($bookname, $author, $price){
			$this->bookname = $bookname;
			$this->author = $author;
			$this->price = $price;
			
		}

		//给price 和 salenum 提供一对 getXxx 和 setXxx的方法

		public function setPrice($price){
			
			//这里，我们可以对price 进行验证和处理
			if(is_numeric($price) && $price > 0.0){
				$this->price = $price;
			}else{
				echo '<br> 价格格式不正确';
			}
		}

		public function getPrice(){
			return $this->price;
		}
		
	}

	$book = new Book('笑傲江湖', '金庸', 34.5);

	$book->setPrice(89.56);

	echo '<pre>';
	var_dump($book);