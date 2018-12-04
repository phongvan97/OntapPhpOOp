<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:50 PM
 */
class ConNguoi
{
    private $name = "Vũ Thanh Tài";
    private $age = 22;

    public static function __callStatic($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }

    private static function getInfo()
    {
        echo self::name . ' + ' . self::age;
    }
}

ConNguoi::getInfo();
ConNguoi::getInfo('name', 'age');