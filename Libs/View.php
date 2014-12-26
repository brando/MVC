<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 16:27
 * To change this template use File | Settings | File Templates.
 */

class View
{
    function __construct()
    {
        //echo 'toto je view <br>';
    }

    public function render($name, $no_include=false)
    {
        if($no_include==true)                   //ak by som z nejakeho dovodu nechcel zobrazit header a footer
        {
            require 'Views/'.$name.'.php';
        }
        else
        {
            require 'Views/header.php';
            require 'Views/'.$name.'.php';
            require 'Views/footer.php';
        }
    }
}