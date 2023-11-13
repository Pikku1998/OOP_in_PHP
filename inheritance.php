<?php
class User3{
    protected $name = 'Prakash';
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
class Customer extends User3{
    private $balance;

    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay($amount){
        return $this->name . ' pays '. $amount;
    }

    public function getBalance(){
        return $this->balance;
    }
}

$customer = new Customer('Eswar', 23 , 1000);
echo $customer->pay(100);
echo '<br>';
echo $customer->getBalance();