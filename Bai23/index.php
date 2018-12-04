<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:57 PM
 */
class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;

    public function __invoke($name)
    {
        if ($name === 'name') {
            echo $this->name;
        }
    }
    public function __toString()
    {
        return 'Phương thức __toString() được gọi';
    }
}
echo new ConNguoi();
$congnuoi = new ConNguoi();
$congnuoi('name');