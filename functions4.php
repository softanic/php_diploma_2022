<?php
$var1=10;
if(isset($var))
{
	
	echo "yes";
}else{
	
	echo "no";
}

$str="hello";
$str2="hellooo";
var_dump(strcmp($str,$str2));
echo "<hr>";
echo ceil(5.6);
echo "<hr>";
echo round(5.4,2);
echo "<hr>";
echo min(100,20,30);
echo "<hr>";
echo md5("abaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
echo "<br>";
echo md5("abaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
echo "<br>";
echo rand(10000,99999);
echo "<hr>";
$arr=['a'=>10,"b"=>20,"c"=>30];
echo json_encode($arr);
var_dump(json_decode('{"a":10,"b":20,"c":30}'));
echo '<br>';
//include 'test.php';
//require 'test.php';
require_once 'test.php';
require 'test.php';

echo "welcome";

?>