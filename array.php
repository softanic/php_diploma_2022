<?php
$s1="ABC";
$s2="pqr";
$s3="xyz";

$arr=array("abc","pqr","xyz");

$abc=array("Html"=>[10,20],"PHP"=>[20,20]);
$pqr=array("Html"=>[10,20],"PHP"=>[20,20]);
$xyz=array("Html"=>[10,20],"PHP"=>[20,20]);


$marks=["abc"=>$abc,"pqr"=>$pqr,"xyz"=>$xyz];
echo "<pre>";
print_r($marks);
echo $marks['abc']['PHP'][0];
/*
foreach($marks as  $key => $value)
{
    ?>
    Hello <b style='color:red;'>
        <?php echo $key; ?>
    </b>, You got <?php echo $value; ?> Marks<br>
    
    <?php
}
echo $marks[0];
  echo "<ul>";
 
for($i="abc";$i<="xyz";$i++)
{
    echo "<li>".$arr[$i] ." = ".$marks[$i]."</li>";
    
}
echo "</ul>";
*/
?>


