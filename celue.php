<?php
/**
 * Created by PhpStorm.
 * User: 33622
 * Date: 2020/8/14
 * Time: 16:59
 */



interface Animals{
    function eat( $food );
}

class Dog implements Animals{

    private $_age;

    public function __construct($_age)
    {
        $this->_age = $_age;
    }

    public function eat($food)
    {
        echo $this->_age. '  eat '. $food;
    }
}

$a = new Dog(15);
$a->eat('大骨头');