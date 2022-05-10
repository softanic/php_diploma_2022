<?php
$arr=array("b"=>20,"a"=>11,"z"=>13,"x"=>45,"p"=>65);
krsort($arr);
echo "<pre>";
print_r($arr);
echo implode("-",$arr);
$str="a,b,c,d,e";
echo "<br>";
//echo $str;
$str_arr=explode(",",$str);
print_R($str_arr);
echo "<hr>";
echo "<h4>array flip</h4>";
print_r($arr);
print_r(array_flip($arr));

array_push($arr,10);
print_r($arr);
array_pop($arr);
print_r($arr);
var_dump( in_array("111",$arr));
echo "<br>";
$arr1=[10,11,12];
$arr2=[20,21,22];
print_r(array_merge($arr1,[10]));
?>