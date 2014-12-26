<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 11:03
 * To change this template use File | Settings | File Templates.
 */
class Help extends Controller
{

    function __construct()
    {
        parent::__construct();
        //echo 'som v help<br>';
    }

    function  index()
    {
        $this->view->render("help/index");
    }

    public function ahoj($parm=false)
    {
        echo 'som v ahoj funkcii '.$parm;


        $this->view->msg='toto je message from help controller<br>';
        $this->view->render('help/index');

        require 'Models/Help_model.php';
        $model = new Help_model();
        $this->view->bla=$model->bla();
    }
}