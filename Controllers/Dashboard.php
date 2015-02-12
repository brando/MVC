<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 10:53
 * To change this template use File | Settings | File Templates.
 */
class Dashboard extends Controller
{
    function  __construct()
    {
        parent::__construct();   //vola triedu Controller

        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false)
        {
            Session::destroy();
            header('Location: ../login');
            exit;
        }

        $this->view->js = array();
    }

    function index()
    {
        $this->view->render('dashboard/index');
    }

    function logout()
    {
        Session::destroy();
        header('Location: ../login');
        exit;
    }

}