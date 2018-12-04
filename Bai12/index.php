<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 11:29 PM
 */
trait SetGetName
{
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAll()
    {
        return $this->getName();
    }

}

//trait SetGetAge
trait SetGetAge
{
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAll()
    {
        return $this->getAge();
    }
}

class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge;
    public function getAll()
    {
        return $this->getName();
    }
}