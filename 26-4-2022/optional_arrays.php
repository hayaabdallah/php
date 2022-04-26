<?php


//5

$temp=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum=0;
foreach($temp as $value)
{
    $sum+=$value;
}
echo "Average Temperature is:"." ".$sum/count($temp)."</br>";
$a=array_unique($temp);
sort($a);
echo "List of five lowest temperatures: ";
for($i=0;$i<=5;$i++)
{
    echo $a[$i]. " ";
}

echo "</br>"."List of five highest temperatures: ";
for($i=count($temp)-5;$i<count($temp);$i++)
{
    echo $temp[$i]." ";
}


//6
echo "<hr>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$arr=array_merge($array1,$array2);
echo "<pre>";
print_r($arr);
echo "</pre>";


//7
echo "<hr>";
//Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.   
for($i=200;$i<=250;$i++)
{
    if($i%4==0)
       echo $i." ";
}


//9
echo "<hr>";
//Write a PHP script to generate unique random 10 numbers within a specific range. 
for($i=0;$i<10;$i++)
 echo(rand(11,20));

//10
echo "<hr>";
//Write a PHP script that returns the lowest integer in the array  that is not 0. 
$array1 = array( 2, 0, 10, 12, 6);
$low;
sort($array1);
foreach($array1 as $value)
{
   if($value!=0)
   {
       $low=$value;
       break;
   }
}
echo $low;
