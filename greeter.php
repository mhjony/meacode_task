<?php

class Greeter
{
    public $array = array();
    public $boss;

    function __construct($boss)
    {
        $this->boss = $boss;
    }
    public function greet()
    {
        $count = count($this->array);
        print_r($this->array);

        if ($count== 0)
            $person = null;
        else
            $person = $this->array[$count-1];

        #print greetings message
        if ($person == $this->boss)
            return "Hello, ".$person;
        else
            return "Welcome, ".$person;
    }
    public function enters($name)
    {
        array_push($this->array, $name);
        #print_r($this->array);
    }
}

$g = new Greeter('Chuck');
$g->enters('John');
$g->enters('Mahmudul');
$g->enters('Hasan');
#$g->enters('Chuck');
echo $g->greet();

?>