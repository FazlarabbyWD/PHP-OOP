<?php

//class person{
//
//    public $name,$age;
//
//    function show(){
//        echo $this->name,"-", $this->age;
//    }
//}
//$c1= new person();
//
//$c1->name= "Fazla Rabby";
//$c1->age= 25;
//$c1->show();

//class person{
//
//    public $name,$age;
//
//    function __construct($n,$a)
//    {
//        $this->name=$n;
//        $this->age=$a;
//
//    }
//
//    function show(){
//        echo $this->name,"-", $this->age;
//    }
//}
//$c1= new person("Fazla rabby Shohan",25);
//
//$c1->show();

class person{

    public $name,$age;

    function __construct($n="Tanveer",$a=22)
    {
        $this->name=$n;
        $this->age=$a;

    }

    function show(){
        echo $this->name,"-", $this->age ."\n";
    }
}
$c1= new person();
$c2= new person("Fazla Rabby", 25);
$c3= new person("MD. Dewan ALi",57);

$c1->show();
$c2->show();
$c3->show();