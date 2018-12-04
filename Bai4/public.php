<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:37 PM
 */
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;

    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}

//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person->name = 'Vũ Van A';
//tác động vào biến name qua hàm setName
$person->setName('Vũ Thanh Tài');
echo $person->getName();