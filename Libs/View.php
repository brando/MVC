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
        echo 'toto je view <br>';
    }

    public function render($name)
    {
        require 'Views/'.$name.'.php';
    }
}