<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 28.12.2014
 * Time: 15:00
 * To change this template use File | Settings | File Templates.
 */

class Session
{
    public static function init()
    {
        @session_start();
    }
    public  static function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if(isset($_SESSION[$key]))
        return $_SESSION[$key];
    }

    public static function destroy()
    {
        //unset($_SESSION);
        session_destroy();
    }
}