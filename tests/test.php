<?php

// echo 'Текущая версия PHP: ' . phpversion() . "<br>";
// echo 'This is PHP version: ' . PHP_VERSION;

// define('REQUIRE', require_once('index.php'));

// if (!defined('REQUIRE')) {
//     define('REQUIRE', true);
//     require 'index.php';
// }

// Магические методы

// Clone
// class User {
//     private $name;
//     private $city;
//     private $id;
//     function __construct($name, $city)
//     {
//         $this->name = $name;
//         $this->city = $city;
//     }
//     function setId($id)
//     {
//         $this->id = $id;
//     }
//     public function __clone()
//     {
//         $this->id = 0;
//     }
// }

// $user1 = new User("Andrew", "Rostov-on-Don");
// $user1->setId(5662);
// $user2 = clone $user1;
// var_dump($user2);


// __set, __get

class GetSet {
    private $number = 1;
    public function __get($name)
    {
        echo "You get {$name}";
    }
    public function __set($name, $value)
    {
        echo "You set {$name} to ";
    }
}

$obj = new GetSet();
echo $obj->number;
echo $obj->number = 689;


// __construct, __destruct
// Экономит строчки кода



?>