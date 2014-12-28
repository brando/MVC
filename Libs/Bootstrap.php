<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 26.12.2014
 * Time: 11:33
 * To change this template use File | Settings | File Templates.
 */

class Bootstrap
{
    function  __construct()
    {
        $url=isset($_GET['url']) ? $_GET['url'] : null;     //inaksie by mi vyhodilo  Undefined index: url in...
        $url=rtrim($url,'/');       //v starsich php verziach to bolo potrebne tu to nieje ake ako demonstraciu som to ukazal
        $url=explode('/',$url);     //explode=?=>vytvori zo stringu array
       // print_r($url);

        if(empty($url[0]))
        {
            require 'Controllers/Index.php';
            $controller = new Index();
            $controller->index();
            return false;  //preto false abz sa uy dalej co je pod false nevykonavalo; kludne som mohol: die('dalej nepokracujem');
        }
        $file='Controllers/'.$url[0].'.php';
        if(file_exists($file))
        {
            require $file; //ulr[0]==controller ulr[1]==method url[2]-[n]==parameters}
        }else
        {
            require 'Controllers/Error.php';
            $error= new Error();
            return false;
            //throw new Exception('File '.$file.' does not exsist');
        }


        $controller = new $url[0];
        $controller->loadModels($url[0]);

#najprv checknem co si dajake parametre lebo ak by boli a neskontroloval by som,
#tak funkcia by sa zavolala a parametre mozno nie co by bol problem
        if(isset($url[2]))
        {
            $controller->$url[1]($url[2]);
        }else
        {
            if(isset($url[1]))
            {
                $controller->$url[1]();           //$controller->function()
            }else
            {
                $controller->index();
            }
        }
    }
}