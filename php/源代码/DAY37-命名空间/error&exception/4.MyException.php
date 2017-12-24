<?php
//旅游类
class Travel
{
    public $ticket = true;     //默认有票
    public $weather = true;    //天气晴朗
    public function buyTicket()
    {
        echo '买火车票<br>';
        if($this->ticket == false){
            throw new TravelException('没有火车票了<br>');
        }
    }
    public function play()
    {
        echo '到达目的地开始玩耍<br>';
        if($this->weather == false){
            //抛出异常信息
            throw new TravelException('下大雨了<br>');
        }
    }
    public function backHome()
    {
        echo '回家开始上班了<br>';
    }
}
//自定义异常类(需要继承Exception类)，提供备用方案
class TravelException extends Exception
{
    public function byAir()
    {
        echo '买飞机票<br>';        
    } 
    public function fish()
    {
        echo '下大雨钓大鱼<br>';
    }
}

$travel = new Travel();
$travel -> ticket = false;
$travel -> weather = false;
try {
    $travel -> buyTicket();
}catch (TravelException $e){
    //不仅可以获得异常信息，还能提供备用方案
    echo $e -> getMessage();
    $e -> byAir();
}
try {
    $travel -> play();
}catch (TravelException $e){
    echo $e -> getMessage();
    $e -> fish();
}
$travel -> backHome();

