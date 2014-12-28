<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 27.12.2014
 * Time: 19:51
 * To change this template use File | Settings | File Templates.
 */

class Database extends PDO
{
    function __construct()
    {
        try
        {
            $username='root';
            $password='37949647';
            parent::__construct('mysql:host=localhost;dbname:phpmyacademy;',$username,$password);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e)
        {
            echo "Invalid username or password ".$e->getMessage();
        }
    }
}