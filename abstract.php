<?php

abstract class parentClass{
    protected function calc($a ,$b){

    }
}
class  childClass extends parentClass{
    public function calc($c ,$d){
        echo $c+$d;
    }
}
$c1= new childClass();
$c1->calc(10,20);

//student profile-Abstract class
//accounts details
//library info