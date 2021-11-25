<?php
class Car{

public $Modal = "";
public $Engine = "";

public function setModal($newval)
{
$this->Modal = $newval;
}

public function setEngine($newval)
{
$this->Engine = $newval;
}

public function getModal()
{
return "Car Modal is ".$this->Modal . "<br />";
}

public function getEngine()
{
return "Car Engine is ".$this->Engine . "<br />";
}

}

class Compact extends Car
{
private $Seat = "0";

public function setSeat($newval)
{
$this->Seat = $newval;
}

public function getSeat()
{


return "Amount of seats is ".$this->Seat . "<br />";
}
}



class MPV extends Car
{
private $minSeat = "0";
private $maxSeat = "0";

public function setSeat($min,$max)
{
$this->minSeat = $min;
$this->maxSeat = $max;
}

public function getSeat()
{


return "Amount of seats is between ".$this->minSeat . " and " .$this->maxSeat . "<br />";
}
}

  $carl=new compact;
  $carl->setModal("Sage");
  $carl->setEngine("1300cc");
  $carl->setSeat("5");
  echo $carl->getModal();
  echo $carl->getEngine();
  echo $carl->getSeat();

  $car2=new compact;
  $car2->setModal("Axia");
  $car2->setEngine("100cc");
  $car2->setSeat("5");
  echo $car2->getModal();
  echo $car2->getEngine();
  echo $car2->getSeat();


  $car3=new MPV;
  $car3->setModal("DDD");
  $car3->setEngine("3434");
  $car3->setSeat(5,8);
  echo $car3->getModal();
  echo $car3->getEngine();
  echo $car3->getSeat();




?>