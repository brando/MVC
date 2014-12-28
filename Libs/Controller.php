<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 16:15
 * To change this template use File | Settings | File Templates.
 */

class Controller
{
    function  __construct()
    {
        //echo 'Main Controller<br>';
        $this->view=new View();
    }

    public function loadModels($name)
    {
        $path ='Models/'.$name.'_model.php';
       // echo $path;
        if(file_exists($path))
        {
            require $path;

            $modelName=$name.'_model';
            $this->model=new $modelName();
        }
    }
}