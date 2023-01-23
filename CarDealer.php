<?php

  class CarDealer {

    public function paintColours($cars){
      $carsNum = count($cars);
      for ($carPosition = 0; $carPosition < $carsNum; $carPosition++) {
        if (($carPosition % 2) == 0) {
          $cars[$carPosition]->setColour("blue");
        } else {$cars[$carPosition]->setColour("red");
        }
      }
    }

    public function getGasolineBrands($cars){
      $gasolineBrands = array();
      foreach ($cars as $car) {
        $fuel = $car->getFuel();
        if ($fuel == "gasoline") {
          array_push($gasolineBrands, $car->getBrand());
        } 
      }
      return $gasolineBrands;
    }

    public function echoAllCars($cars){
      $i = 0;
      foreach ($cars as $car) {
        echo "Car " . $i . "= " . $car->toString() . "<br><br>";
        $i++;
      }
    }

}
?>