<?php
$n=10;
function add5(&$no)
{
    $no= $no+5;
}
add5($n);
echo $n;

echo "<br>";

function add($no1,$no2,$no3=0,$no4=0,$no5=0)
{
    return $no1+$no2+$no3+$no4+$no5;
}
echo "<br>";
echo add(10,20,20,30,30);

?>
