<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 27.12.2014
 * Time: 19:59
 * To change this template use File | Settings | File Templates.
 */

class login_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        #fciu prepare mam z PDO class
       try
       {
            $sth= $this->database->prepare("SELECT * FROM pouzivatelia WHERE name = :login AND password = :password");

            $sth->execute(array(
                'login'=>$_POST['login'],
                'password'=>$_POST['password']
            ));
       }catch (PDOException $e)
        {
            echo "Nepripojeny k databaze ".$e->getMessage();
            exit();
        }

       // $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count>0)
        {
            Session::init();
            Session::set('loggedIn',true);
            header('Location: ../dashboard');
        }else
        {
            header('Location: ../login');
        }
        //print_r($data);
    }
}