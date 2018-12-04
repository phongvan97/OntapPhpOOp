<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:56 PM
 */

class ConNguoi
{
    public static $name = 'Vũ Thanh Tài';

    public static function getName()
    {
        //gọi thuộc tính tĩnh
        return self::$name;
        //hoặc
        return ConNguoi::$name;
    }
    public static function showAll()
    {
        //gọi phương thức tĩnh
        return self::getName();
        //hoặc
        return ConNguoi::getName();
    }
}

//gọi thuộc tính tĩnh
ConNguoi::$name;
//gọi phương thức tĩnh
ConNguoi::showAll();
//hoặc
$connguoi = new ConNguoi();
$connguoi->showAll();