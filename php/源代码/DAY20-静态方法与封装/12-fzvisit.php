<?php
	header('content-type:text/html;charset=utf-8');

	//Movie(名称，导演，成本(protected)，票房[ticket_office](private))
	//updateInfo() showAllInfo()

	class Movie{
		public $name;
		public $director;
		protected $cost;
		private $ticketOffice;

		public function __construct($name, $director, $cost){
			$this->name = $name;
			$this->director = $director;
			$this->cost = $cost;
		}

		//显示一下电影信息
		public function showAllInfo(){
			echo '<br> 电影的信息如下:';
			echo '<br> name = ' . $this->name;
			echo '<br> director = ' . $this->director;
			echo '<br> cost = ' . $this->cost;
			echo '<br> tickeoffice = ' . $this->ticketOffice;
		}

		

		public function updateInfo($director, $cost, $ticketOffice){
			
			//简单方式
//			$this->director = $director;
//			$this->cost = $cost;
//			$this->ticketOffice = $ticketOffice;

			//结合setXxx 来完成
			$this->setDirector($director);
			$this->setCost($cost);
			$this->setTicketOffice($ticketOffice);
			
		}

		//setXxx GetXxx
		
		public function SetDirector($director){
			$this->director = $director;
		}
		
		public function getDirector(){
			return $this->director;
		}

		public function setCost($cost){
			
			//加入数据的验证和判断
			if(is_numeric($cost) && $cost > 0.0){
				$this->cost = $cost;
			}else{
				echo '<br> 输入成本格式有问题 ';
			}
		}

		public function getCost(){
			return $this->cost;
		}

		public function setTicketOffice($ticketOffice){
			
			//加入数据的验证和判断
			if(is_numeric($ticketOffice) && $ticketOffice > 0.0){
				$this->ticketOffice = $ticketOffice;
			}else{
				echo '<br> 输入票房格式有问题 ';
			}
		}

		public function getTicketOffice(){
			return $this->ticketOffice;
		}

	}

	$movie = new Movie('葫芦娃', '老爷子', 60000);

	$movie->showAllInfo();

	echo '<br>***********<br>';
	$movie->updateInfo('老韩', 4000, 89000);

	$movie->showAllInfo();