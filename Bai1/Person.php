<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:12 PM
 */
class Person {
    public $name="Nguyen Van Phong";
    public $age=21;
    public function GetDetail(){
        return $this->name.'-'.$this->age;
    }
}