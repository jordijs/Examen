<?php

enum fuel {
    case gasoline;
    case oil;
    case hybrid;
    case electric;
};

class Car {
    private $cilinders;
    private $brand;
    private $plate;
    private $fuel;
    private $colour;

    
    public function __construct($cilinders, $brand, $plate, $fuel, $colour)
    {
        $this->cilinders = $cilinders;
        $this->brand = $brand;
        $this->plate = $plate;
        $this->fuel = $fuel;
        $this->colour = $colour;
    }


    public function setColour($colour)
    {
        $this->colour = $colour;
    }


    public function getFuel()
    {
        return $this->fuel;
    }


    public function getBrand()
    {
        return $this->brand;
    }

    public function toString(){
        return "<Cilinders: " . $this->cilinders . "<br>
        Brand: " . $this->brand . "<br>
        Plate: " . $this->plate . "<br>
        Fuel: " . $this->fuel->name . "<br>
        Colour: " . $this->colour;
    }

}

?>