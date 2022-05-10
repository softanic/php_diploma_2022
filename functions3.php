<?php
$arr=[10,11,20,12,15,20];
sort($arr);
rsort($arr);
$arr2=['x'=>10,"b"=>20,"a"=>30,"d"=>35];
arsort($arr2);
ksort($arr2);
krsort($arr2);
print_r($arr2);

$str="Hello word";
echo "<br>";
echo strlen($str);

echo "<br>";
echo str_word_count($str);
echo "<br>";
echo strrev($str);

echo "<br>";
echo strtoupper($str);

echo "<br>";
echo strtolower($str);

echo "<br>";
echo ucfirst($str);


echo "<br>";
echo ucwords($str);

echo "<br>";
echo strtotime("22/03/2022");

echo strpos($str, "z");
echo str_replace("word", "abc", $str);


?>
