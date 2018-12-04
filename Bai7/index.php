<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:48 PM
 */
abstract class DongVat{
    protected $name;
    abstract protected function GetName();
}
class ConBo extends DongVat{

    protected function GetName()
    {
       return $this->name;
    }
}