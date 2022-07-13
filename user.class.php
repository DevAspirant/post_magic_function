<?php 

class User {
    public $name;
    public $dob;

    public $city;

    public $username;
    public $password;
    public $email;

    public function __toString()
    {
        return 'welcome to ' . $this->name;
    }
}


?>