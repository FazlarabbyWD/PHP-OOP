<?php

interface parent1{
  function add($a,$b);
}
interface parent2{
    function sub($c,$d);
}

class childClass implements parent1,parent2{
    public function add($a, $b)
    {
        echo $a+$b;
        echo PHP_EOL;
    }
    public function sub($c, $d)
    {
       echo $c-$d;
    }

}
$test=new childClass();
$test->add(10,20);
$test->sub(30,10);