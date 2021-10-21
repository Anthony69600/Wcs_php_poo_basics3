<?php

final class ResidentialWay extends HighWay
{

    public function __construct(array $currentVehicles = [], int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;

    }

    public function addVehicle(Vehicle $vehicle): void
    {
        array_push($this->currentVehicles, $vehicle);
        echo 'vehicle ok !';
    }
     
}





