<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:36 PM
 */
class Person
{
    //khai báo thuộc tính name ở private
    private $name;

    //Khai báo phương thức run ở private
    private function run()
    {
        return 'Đây là hàm run';
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getRunMethod()
    {
        return $this->run();
    }
}

//Khởi tạo class
$person = new Person();
//set thuộc tính name
$person->setName('Vũ Thanh Tài');
//Lấy ra thuộc tính name
echo $person->getName();
//Gọi giá trị của phương thức run
echo $person->getRunMethod();