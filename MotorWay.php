<?php


require_once 'HighWay.php';

final class MotorWay extends HighWay
{       
    
    public function __construct(array $currentVehicles = [], int $nbLane = 4, int $maxSpeed = 130)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if (($vehicle instanceof Car)) 
        {

        array_push($this->currentVehicles, $vehicle);
        echo 'vehicle ok !';

        }
        else {

        echo 'Vehicle not ok !';
        }
        
    }

        
}

