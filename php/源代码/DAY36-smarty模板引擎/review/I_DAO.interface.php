<?php
interface I_DAO
{
    public function fetchRow($sql);
    public function fetchAll($sql);
    public function fetchColoumn($sql);
    public function exec($sql);
    public function lastInsertId();
    public function quote($data);
}