<?php
echo "<pre>";
print_R($_GET);
$fname=$_GET['fname'];
$lname=$_GET['lname'];
echo "welcome ".$_GET['fname']." $lname";
echo "<br>";
echo "Mobile No: ".$_GET['mobile'];
echo "<br>Gender:". $_GET['gender'];
if(isset($_GET['lang']))
{
    echo "<br>Lang: ". implode(",", $_GET['lang']);
}
echo "<br>City: ". $_GET['city'];

?>
