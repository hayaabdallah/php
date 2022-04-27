<?php

class AC
{
//properties    
public $color=2;
public $space;

//methods
public function doubleclick()
{
    echo "you clicked double";
}
}

$obj=new AC();
$obj->color="red";
$obj->doubleclick();
print_r($obj);

