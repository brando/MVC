<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 16:09
 * To change this template use File | Settings | File Templates.
 */

class Error extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo 'toto je Error';
    }
    function  index()
    {
        $this->view->msg='this page doesnt exist';  //mgs je premenna lebo nema ()
        $this->view->render('error/index');         //render je fcia lebo ma ()
    }
}