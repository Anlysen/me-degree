<?php

// Моделирует многоквартирный дом

class Apartment { // Хранит информацию о квартире
    private $number;
    private $rooms;
    private $area;

    public function __construct($number, $rooms, $area) {
        $this->number = $number;
        $this->rooms = $rooms;
        $this->area = $area;
    }

    public function getInfo() : string {
        return "Квартира №{$this->number}, Комнат: {$this->rooms}, Площадь: {$this->area} м";
    }
}

class ApartmentBuilding { // Содержит список квартир
    private $address;
    private $apartments = [];

    public function __construct($address) {
        $this->address;
    }

    public function addApartment(Apartment $apartment) :void {
        $this->apartments[] = $apartment;
    }

    public function getInfo() : string {
        $info = "Многоквартирный дом по адресу: {$this->address} <br>";
        $info .= "Квартиры: <br>";
        foreach ($this->apartments as $apartment) {
            $info .= " - " . $apartment->getInfo() . "<br>";
        }
        return $info;
    }
}

// Пример использования
$building = new ApartmentBuilding("ул. 2-я Речная, д. 27");

$building->addApartment(new Apartment(1, 2, 55.3));
$building->addApartment(new Apartment(2, 3, 44.3));
$building->addApartment(new Apartment(4, 1, 10.1));

echo $building->getInfo();
