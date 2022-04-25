<?php
//1
$year=2013;
if($year%4==0)
  echo "this is a leap year";
  else if($year%100==0)
  echo "it is not a leap year";
  else if($year%400==0)
  echo "this is a leap year";
  else
  echo "it is not a leap year";

//2
echo "</br>";

$temp=27;
if($temp<20)
echo "it is winter";
else
echo "It is summertime";

//3
echo "</br>";

$num1=2;
$num2=2;
if($num1==$num2)
{
    $sum=$num1+$num2;
    $x=$sum*3;
    echo $x;

}

// 4
echo "</br>";

$n1=40;
$n2=10;
$s=$n1+$n2;
if($s==30)
echo $s;
else
echo "false";

// 5
echo "</br>";
$y=20;
if($y>=0 && $y%3==0)
 echo $y;
 else
 echo "fasle";

// 6 [20-50]
echo "</br>";

$n=50;
if($n>=20 && $n<=50)
  echo "true";
  else
  echo "false";


// 7
echo "</br>";

$n1=10;
$n2=20;
$n3=30;
if($n1>$n2 && $n1>$n3)
        echo 10;
   else if($n2>$n1 && $n2>$n3)
        echo 20;
   else
        echo 30;

// 8
echo "</br>";

$units=50;

if($units>0)
  echo $units*2.5;
else if($units>100)
  echo $units*5;
else if($units>200)
  echo $units*6.2;
else if($units>250)
 echo $units*7.5;



// 9
echo "</br>";

$age=20;
 if($age>=18)
   echo"eligible to vote";
 else 
   echo"is no eligible to vote";

// 10
echo "</br>";

$numb=-60;
if($numb==0)
  echo "zero";
  else if($numb>=0)
  echo "positive";
  else
  echo "negative";


// 11
echo "</br>";

$num1=20;
$num2=10;
$operator='-';
$result='';

if(is_numeric($num1) && is_numeric($num2))
   {

     switch($operator)
     {
        case '+':
            $result=$num1+$num2;
            break;
        case '-':
            $result=$num1-$num2;
            break;
        case '/':
            $result=$num1/$num2; 
            break;
        case '-':
            $result=$num1*$num2;   
            break;
     }
       echo $result;
   }


// 12
echo "</br>";

$gr1=60;
$gr2=75;
$gr3=80;
$gr4=70;
$gr5=90;

$avg=$gr1+$gr2+$gr3+$gr4+$gr5/5;
if($avg<60)
  echo 'F';
  else if ($avg<70)
  echo 'D';
  else if($avg<80)
  echo 'C';
  else if($avg<90)
  echo 'B';
  else
  echo 'A';