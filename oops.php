<?php
class car{
    
    public $name;
    private $color;
    
    
    public function __construct($name="")
    {
        
        $this->name=$name;
    }
    public function __destruct() {
        echo "object deleted";
    }
    public function welcome()
    {
        echo "welcome";
    }
}
$c=new car('demo car');
//$c=new car();
//$c->name="abc";
echo $c->name;
//$c->color="red";
?>
