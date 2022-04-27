<?php


//1.Write a PHP script to check if the inserted number is a prime number 
function isprime($num)
{
    if($num==1)
     return 0;
    for($i=2;$i<=$num/2;$i++)
    {
        if($num % $i==0)
          return 0;
    }
    return 1;
}

$result=isprime(3);
if($result==1)
  echo "is prime";
  else
  echo " is not prime";
  echo "<hr>";



  //2.	Write a PHP script to reverse a string 
  $str="remove";
  echo strrev($str);
  echo "<hr>";


  //3.	 Write a PHP script to check if the all string characters are lower cases

  $str="remove";
  if(ctype_lower($str))
     echo "Your String is Ok ";
     else
     echo "no";
     echo "<hr>";


//4.	Write a PHP function to swap to variables?

function swap($a,$b)
{
$n=$a;
$a=$b;
$b=$n;
echo "a=".$a."</br>";
echo "b=".$b."</br>";

}
swap(12,10);
echo "<hr>";


//6.	Write a PHP function to check if a number is an Armstrong number or not ?

function armstrong($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
      $sum = $sum + pow((string)$num{$i},$sl);
    }
    if ((string)$sum == (string)$num) {
     echo "armstrong number";
    } else {
      echo "not armstrong number";
    }
  }
  armstrong(407); 
  echo "<hr>";

//7.	Write a PHP function that checks whether a passed string is a palindrome or not?

function palindrome($str)
{
    if($str==strrev($str))
      echo "Yes it is a palindrome ";
    else
      echo " is not palindrome";
}
palindrome("Eva, can I see bees in a cave");
echo "<hr>";

//8.	Write a PHP function to remove duplicates from an array ?
$array1 = array(2, 4, 7, 4, 8, 4);
$new=array_unique($array1);
foreach($new as $value)
  {
      echo $value. " ";
  }