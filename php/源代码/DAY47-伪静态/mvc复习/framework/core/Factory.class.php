<?php
class Factory
{
    public static function M($modelName)
    {
        static $model_list = array();
        if(!isset($model_list[$modelName])){
            $model_list[$modelName] = new $modelName;
        }
        return $model_list[$modelName];
    }
    
}
