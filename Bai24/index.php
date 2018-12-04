<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:58 PM
 */
class ConNguoi
{
    public $name = "Vũ Thanh Tài";
    public $age = 21;

    public function __debugInfo()
    {
        return [
            'name' => $this->name,
        ];
    }
}

$connguoi = new ConNguoi();
var_dump($connguoi);