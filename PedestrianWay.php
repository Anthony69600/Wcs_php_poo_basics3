<?php 

final class PedestrianWay extends HighWay
{

    public function __construct(array $currentVehicles = [], int $nbLane = 1, int $maxSpeed = 10)
    {   
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle): void
    {

    if (($vehicle instanceof Bicycle)||($vehicle instanceof Skateboard)) 
        {
    
        array_push($this->currentVehicles, $vehicle);
        echo 'vehicule ok!';

        }

    else
    {
        echo 'Vehicle not ok !';
        
    }
  
    }

}
