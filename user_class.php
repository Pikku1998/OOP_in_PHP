<?php
// Defining a Class
class User{
    // Class property (attribute)
    public $name;

    // Class method (function)
    public function sayHello(){
        return "{$this->name} says Hello"; 
    }
}

// Instantiating an user object from User class
$user1 = new User();
echo $user1->sayHello();
echo '<br>';

$user1->name = 'Prakash';
echo $user1->sayHello();

$user2 = new User();
$user2->name = 'Eswar';
echo '<br>';
echo $user2->sayHello();






