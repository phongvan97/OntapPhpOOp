<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/4/2018
 * Time: 10:56 PM
 */
class ConNguoi
{
    private $name = 'Nguyen Van Phong';
    private $age = 20;

    public function __sleep()
    {
        return array('name');
    }

    public function getName()
    {
        echo $this->name;
    }

    /**
     * gọi hàm getName khi unserialize()
     */
    public function __wakeup()
    {
        $this->getName();
    }
}

unserialize(serialize(new ConNguoi()));