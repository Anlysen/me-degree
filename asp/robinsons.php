<?php

class Clause {
    public $role = 'Husband, dad';
    public $name = 'Clause';
    public $age = 38;
    public $profession = 'Entrepreneur';
    public function hello() {
        echo "Hello<br>";
    }
}

$clause = new Clause;
$clause->role;
$clause->name;
$clause->age;
$personRole = $clause->role;
$personName = $clause->name;
$personAge = $clause->age;
$clause->profession;
$personProfession = $clause->profession;

echo "My name is " . $personName . ", my age " . $personAge . "<br>";
echo "So I`m " . $personRole . " and " . "my profession " . $personProfession . "!<br>";

$clause->hello();
print_r($clause);


class Margaret {
    public $role = 'Wife, mom';
    public $name = 'Margaret';
    public $age = 36;
    public $profession = 'Manager';
    public function hey() {
        echo "Hey there! I`m here!<br>";
    }
}

$margaret = new Margaret;
$margaret->role;
$margaret->name;
$margaret->age;
$personRole = $margaret->role;
$personName = $margaret->name;
$personAge = $margaret->age;
$margaret->profession;
$personProfession = $margaret->profession;

echo "My name is " . $personName . ", my age " . $personAge . "<br>";
echo "So I`m " . $personRole . " and " . "my profession " . $personProfession . "!<br>";

$margaret->hey();
print_r($margaret);


class Chuck {
    public $role = 'Young son';
    public $name = 'Chuck';
    public $age = 8;
    public $profession = 'Sport';
}


class David {
    public $role = 'Middle son';
    public $name = 'David';
    public $age = 12;
    public $profession = 'Scientist';
}


class Barbara {
    public $role = 'Older daughter';
    public $name = 'Barbara';
    public $age = 16;
    public $profession = 'Teenager, blogger';
}


class Bob {
    public $role = 'Grandpa';
    public $name = 'Bob';
    public $age = 65;
    public $profession = 'Seaman';
}


class March {
    public $role = 'Grandma';
    public $name = 'March';
    public $age = 63;
    public $profession = 'Cooker';
}


class Harold {
    public $role = 'Grandpa';
    public $name = 'Harold';
    public $age = 67;
    public $profession = 'Lawyer';
}


class Lorraine {
    public $role = 'Grandma';
    public $name = 'Lorraine';
    public $age = 65;
    public $profession = 'Fashion designer';
}

?>