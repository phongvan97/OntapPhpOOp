<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:31 PM
 */
class ConNguoi
{
    protected static $name = 'ConNguoi';

    public static function getSelf()
    {
        return new self;
        // or
        // return new static();
    }

    public static function getStatic()
    {
        return new static;
        // or
        // return new static();
    }
}

class NguoiLon extends ConNguoi
{
}

echo get_class(NguoiLon::getSelf());
echo get_class(NguoiLon::getStatic());