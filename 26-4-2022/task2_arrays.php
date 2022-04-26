<?php

//1

$colors = array('white', 'green', 'red');
  
    echo "<ul>"."<li>".$colors[1] . "</li>" . "</ul>";
    echo "<ul>"."<li>".$colors[2] . "</li>" . "</ul>";
    echo "<ul>"."<li>".$colors[0] . "</li>" . "</ul>";


//2
echo "<hr>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

sort($cities);
//The capital of Netherlands is Amsterdam 
foreach($cities as $key => $value)
{
    echo "The capital of ". $key . " is ".$value;
    echo "</br>";
}


//3
echo "<hr>";

$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color[4];

//4
echo "<hr>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach($fruits as $key => $value)
{
    echo $key . "=" .$value."</br>";
}

//8
echo "<hr>";

$words= array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen',$words);

echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';