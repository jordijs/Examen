<?php

require_once 'Car.php';
require_once 'CarDealer.php';

/*coches
cilindrada 
marca
matricula
tipo de combustible
gasolina, gasoil hibrido, electrico
color

6 coches

2 procesos:
1. pintar el color de coches en posiciones pares en azul
2. pintar color coches impares a rojo

2. muestra marca de coches que tienen combustible gasolina
*/

$car1 = new Car (2.4, "Toyota", "1234FGH", fuel::gasoline, "green");
$car2 = new Car (2, "Hyundai", "1433FHH", fuel::oil, "blue");
$car3 = new Car (3, "Mercedes", "1454FFT", fuel::gasoline, "yellow");
$car4 = new Car (4.1, "Opel", "9634QWE", fuel::hybrid, "red");
$car5 = new Car (3.2, "Volkswagen", "3567BVG", fuel::electric, "white");
$car6 = new Car (1.8, "Toyota", "0874GGH", fuel::electric, "grey");

$cars = array($car1, $car2, $car3, $car4, $car5, $car6);

$carDealer = new CarDealer($cars);

echo "------------------------------Before painting:------------------------------------<br>";
$carDealer->echoAllCars($cars);
$carDealer->paintColours($cars);
echo "<br><br>--------------------After painting:--------------------------------------<br><br><br>";
$carDealer->echoAllCars($cars);
echo "<br>------------------------------The brands using gasoline are:--------------------------------<br>";
$gasolineBrands = $carDealer->getGasolineBrands($cars);
foreach ($gasolineBrands as $gasolineBrand) {
    echo $gasolineBrand . "<br>";
}



?>