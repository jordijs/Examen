<?php

  class CarDealer {

    private $cars;

    public function __construct($cars){
      $this->cars = $cars;
    }

    public function paintColours(){
      $carsNum = count($this->cars);
      for ($carPosition = 0; $carPosition < $carsNum; $carPosition++) {
        if (($carPosition % 2) == 0) {
          $this->cars[$carPosition]->setColour("blue");
        } else {$this->cars[$carPosition]->setColour("red");
        }
      }
    }

    public function getGasolineBrands(){
      $gasolineBrands = array();
      foreach ($this->cars as $car) {
        $fuel = $car->getFuel();
        if ($fuel == fuel::gasoline) {
          array_push($gasolineBrands, $car->getBrand());
        } 
      }
      return $gasolineBrands;
    }

    public function echoAllCars(){
      $i = 0;
      foreach ($this->cars as $car) {
        echo "Car " . $i . "= " . $car->toString() . "<br><br>";
        $i++;
      }
    }

}
?>