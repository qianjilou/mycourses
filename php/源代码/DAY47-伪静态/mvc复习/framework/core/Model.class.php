<?php
class Model
{
    protected $dao;
    public function __construct()
    {
        //实例化dao对象
        $option = array(
            'host'  =>  '127.0.0.1',
            'user'  =>  'root',
            'pass'  =>  'root'
        );
        $this->dao = DAOPDO::getSingleton($option);
    }
}