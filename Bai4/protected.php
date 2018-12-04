<?php
class Person
{
    //khai báo thuộc tính xe dạng protected
    protected $name;
}

class Male extends Person
{
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
//Sai vì biến name có visibility là protect nên không tác động từ ngoài class vào được
$person->name;
//khởi tạo lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male->setName('Vũ Thanh Tài');
echo $male->getName();
