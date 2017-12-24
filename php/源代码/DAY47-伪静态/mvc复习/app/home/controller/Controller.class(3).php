<?php
class Controller
{
    public function __construct()
    {
        $this->initSmarty();
    }
    public function initSmarty()
    {
        $this->smarty = new Smarty();
        $this->smarty -> setTemplateDir();
        $this->smarty -> setCompileDir();
    }
    
}