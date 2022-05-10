<?php
class car{
    var $name;
    function car(){
        echo "welcome to car class<br>";
    }
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
        
    }

    public function __destruct()
    {
        echo "object deleted";
    }
}
class suzuki extends car{
    public function __construct() {
        echo "child class";
        $this->name="suzuki";
    }
}
$c=new suzuki();
echo $c->name;




?>