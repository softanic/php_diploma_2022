<?php
class shape
{
    public function __call($name,$args)
    {
        if($name=="area")
        {
            if(count($args)==1)
            {
                return 3.14*$args[0];
            }else if(count($args)==2)
            {
                return $args[0]*$args[1];
            }
        }
    }
}
$s=new shape();
echo $s->area(10,20);