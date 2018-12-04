<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:37 PM
 */


class ConNguoi
{
    private $name = "Vũ Thanh Tài";

    public function __get($key)
    {
        //kiểm tra xem trong class có tồn tại thuộc tính không
        if (property_exists($this, $key)) {
            //tiến hành lấy giá trị
            return $this->$key;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }

    public function getName()
    {
        echo $this->name;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->name;

$connguoi->age;
