<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/3/2018
 * Time: 10:23 PM
 */
class Connguoi{
    public $name;
    public $Age;
    public $gt;
    const sochan=2;
    public function an(){

    }
    public function GetSoChan(){
        return self::sochan;
    }
    public function noi($caunoi){
        return $this->GetSoChan().'-'.$caunoi;
    }
    public function GetName(){
        return $this->name;
    }

}
$connguoi=new Connguoi();
echo $connguoi->noi('hihi');
$connguoi->name='phong2';
echo $connguoi->name;