<?php
class employee{
    public $name,$age,$salary;

    function __construct($n,$a,$s)
    {
       $this->name=$n;
       $this->age=$a;
       $this->salary=$s;
    }
    function info(){
        echo "Name :".$this->name ."\n";
        echo "Age :".$this->age  ."\n";
        echo "Salary :".$this->salary."\n";
    }

}
class manager extends employee{

    public $Tsalary;
    public $mobile=2000;
    public $transport=5000;
    function info(){
        $this->Tsalary=$this->mobile+$this->transport+$this->salary;
        echo "Name :".$this->name ."\n";
        echo "Age :".$this->age  ."\n";
        echo "Salary :".$this->Tsalary;
    }

}
$c1= new employee("fazla Rabby",25,120000);
$c1->info();

$c2=new manager('Tanver Rabby',21,80000);
$c2->info();