<?php

class baseClass {
    public $name;
    function __construct() {
        $this->name="Prasad";
        echo "base class clalled<br>";
    }
    function welcome()
    {
        echo "welcome to base class<br>";
    }
    public function __call($name, $arguments) {
        if($name=="area")
        {
            var_dump($arguments);
        }
    }

}
class childClass extends baseClass {
    public $name;
    function __construct($name) {
        parent::__construct();
        $this->name=$name;
        echo "child class called<br>";
    }
    function welcome()
    {
        echo "welcome {$this->name} to child class<br>";
    }

}
$c=new childClass("mithilesh");
$c->welcome();
/*$c1=clone($c);
//$c1=$c;
$c->name="prasad";
$c1->welcome();
$c->welcome();
echo + */

$data= serialize($c);
print_r(unserialize($data));
/*
if(class_exists("childClasss"))
	echo "exist";
else
	echo "not exist";

//echo get_parent_class($c);
//print_r(get_declared_classes());
print_r(get_class_vars("childClass"));
var_dump(method_exists($c,"welcome"));
*/







