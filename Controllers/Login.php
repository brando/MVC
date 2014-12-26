<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 10:53
 * To change this template use File | Settings | File Templates.
 */
class Login extends Controller
{
    function  __construct()
    {
        parent::__construct();   //vola triedu Controller
        //echo 'som v index.<br>';
        $this->view->render('login/index');
    }
}