<?php
class User4{
    private $name;
    private $age;

    public static $minPassLen = 6;

    public static function vaildate_password($password){
        if(strlen($password)>=self::$minPassLen){
            return true;
        }
        return false;
    }
}

$password = '12345';
if(User4::vaildate_password($password)){ // No need to instantiate class for static methods or properties.
    echo 'Valid Password';
}
else{
    echo 'Invalid Password';
}


?>