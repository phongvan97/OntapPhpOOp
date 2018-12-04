<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:51 PM
 */
interface DongVat
{
    public function getName();
}
interface ConTrau
{
    public function checkSung();
}


//Class này đúng vì đã khai báo và định nghĩa lại phương thức getName
//trong interface
class Connge implements DongVat,ConTrau
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function checkSung()
    {
        // TODO: Implement checkSung() method.
    }
}
