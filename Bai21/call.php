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

    public function __call($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }

    private function getInfo()
    {
        echo $this->name . ' + ' . $this->age;
    }
}

$connguoi = new ConNguoi();

$connguoi->getInfo();

$connguoi->getInfo('name', 'age');
