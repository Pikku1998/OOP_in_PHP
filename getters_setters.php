<?php
class User{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    // Custom getters
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

    // Custom setters
    public function setName($value){
        $this->name = $value;
    }
    public function setAge($value){
        $this->age = $value;
    }

    // __get magic method
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    // __set magic method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }


}

$user1 = new User('Prakash',25);
echo $user1->getName().'<br>';
echo $user1->getAge().'<br>';

$user1->setName('Eswar');
$user1->setAge(23);
echo $user1->getName().'<br>';
echo $user1->getAge().'<br>';

echo $user1->__get('name');
$user1->__set('name', 'Chandu');
echo '<br>';
echo $user1->__get('name');









