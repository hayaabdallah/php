<?php

//1
$total=0;
for($i=0;$i<=30;$i++)
{
   $total+=$i;
}
  echo $total;

//4
echo "<hr>";


for($i=1;$i<=5;$i++)
{

  for($j=1;$j<=5;$j++)
  {
     if($j==$i)
        echo $j . " ";
        else
        echo "0" . " ";
  }
 echo "</br>";

}

//5
echo "<hr>";

$num=5;
$factor=1;
for($i=$num;$i>=1;$i--)
{
    $factor=$factor * $i;
}

echo "the factorial for " . $num ." is " . $factor;

//6
echo "<hr>";
$n1=0;
$n2=1;
$fib_num=0;
echo $n1 . " ".$n2 . " ";
while($fib_num<10)
{
    $n3=$n1+$n2;
    echo $n3." ";
    $n1=$n2;
    $n2=$n3;

    $fib_num++;
}

//9
echo "<hr>";


$n=1;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
      {
          echo $n++ . " ";
      }
      echo "</br>";
}