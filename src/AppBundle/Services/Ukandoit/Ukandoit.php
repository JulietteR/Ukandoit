<?php
namespace AppBundle\Services\Ukandoit;

class Ukandoit
{
    private $run;
    private $walk;
    private $bike;
    private $car;

    function __construct()
    {
        $this->walk = array("min" => 0, "max" => 6.5);
        $this->run = array("min" => 6.6, "max" => 13);
        $this->bike = array("min" => 13.1, "max" => 27);
        $this->car = array("min" => 27.1, "max" => 150);
    }

    public function getSpeed($array)
    {
        $step = $array["step"]; // nb pas
        $time = $array["time"]; // durée totale d'activité
        $distance = $array["distance"]; //nb de metres réalisé
    }

    public function getSteps($array)
    {
        $step = $array["step"]; // nb pas
        $time = $array["time"]; // durée totale d'activité
        $distance = $array["distance"]; //nb de metres réalisé
    }

    public function getDistance($array)
    {
        foreach ($array as $key => $value){

        }
        $distance = $array["distance"]; //nb de metres réalisé
    }
}