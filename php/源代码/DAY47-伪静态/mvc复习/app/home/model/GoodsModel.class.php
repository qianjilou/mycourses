<?php
class GoodsModel extends Model
{
    
    public function add()
    {
        $sql = "INSERT INTO goods VALUES('')";
        
        $this->dao -> exec($sql);
    }
    public function find()
    {
        
    }
}