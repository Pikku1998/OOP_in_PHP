<?php

class User{
    public $name;
    public $age;

    // will run first when the class is instatiated
    public function __construct($name, $age)
    {
        echo __CLASS__,'class instantiated<br>'; //__CLASS__ is a magic constant.
        $this->name = $name;
        $this->$age = $age;
    }

    public function sayHello(){
        return $this->name . ' says Hello<br>';
    }
    // will run when there are no references to the object. i.e. at last
    public function __destruct()
    {
        echo 'Destructor ran..<br>';
    }
}

$user1 = new User('Prakash', 25);
echo $user1->sayHello();

$user2 = new User('Eswar', 23);
echo $user2->sayHello();



