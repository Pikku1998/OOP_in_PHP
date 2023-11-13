<?php
class User2{
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

$User21 = new User2('Prakash',25);
echo $User21->getName().'<br>';
echo $User21->getAge().'<br>';

$User21->setName('Eswar');
$User21->setAge(23);
echo $User21->getName().'<br>';
echo $User21->getAge().'<br>';

echo $User21->__get('name');
$User21->__set('name', 'Chandu');
echo '<br>';
echo $User21->__get('name');

?>







