<?php include 'classes/car.php';

$car1 = new Car();
$car1->make = 'Toyota'.'<br/>';
echo $car1->make;

$car1->make = 'Honda'.'<br/>';
echo $car1->make;

$car1->start();
echo '<hr/>';

$car2 = new CarX();
$car2->setMake('Hyundai');
echo $car2->getMake();

$car3 = new CarEx('Volkswagen', 'Golf', 'Black');
echo $car3->echoMe();
echo '<hr/>';

$car4 = new CarEx('Renault', 'xxx', 'Yellow');
echo $car4->echoMe();

?>