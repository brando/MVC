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
        $this->view->render("help/index");
    }

    public function ahoj($parm)
    {
        echo 'som v ahoj funkcii '.$parm;

        
        $this->view->msg='toto je message from help controller, a nebol zadany parameter<br>';
        $this->view->render('error/index');

        require 'Models/Help_model.php';
        $model = new Help_model();
    }
}