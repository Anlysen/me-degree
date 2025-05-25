<?php

//require_once 'sort.php';

class Robinson
{
    public $age;
    public $name;
}

$clause = new Robinson();
$clause->age = 35;
$clause->name = "Clause";

class People
{
    public $name;
    public $login;
    public $email;
    private $pass;
    private $address;
}

$oliver = new People();
$oliver->name = "Oliver";
$oliver->login = "oliv111";
$oliver->email = "oliver@gmail.com";

echo "Name: $oliver->name<br>";
echo "Login: $oliver->login<br>";
echo "Email: $oliver->email<br>";

class Animals
{
    public $name;
    public $place;
    public $price;
}

$lion = new Animals();
$lion->name = "Lion";
$lion->place = "Africa";
$lion->price = 100000;

echo "Name: $lion->name<br>";
echo "Place: $lion->place<br>";
echo "Price: $lion->price$<br>";

class Planet
{
    public $name;
    public $distance;
}

$mars = new Planet();
$mars->name = "Mars";
$mars->distance = 1000000;

echo "Name: $mars->name<br>";
echo "Distance: $mars->distance km.<br>";

class Node
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class NodeList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function add($data)
    {
        $newNode = new Node($data);

        if ($this->tail === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
        return $newNode;
    }
}

$node = new NodeList();
$node->add('Jupiter');

echo "Planet: $node";
