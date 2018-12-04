<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:19 PM
 */

function __autoload($className)
{
    if (file_exists($className . '.php')) {
        include_once $className . '.php';
    }

}
$nguoilon=new NguoiLon();
$tre=new TreCon();