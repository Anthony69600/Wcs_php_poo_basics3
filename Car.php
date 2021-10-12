<?php


class Car
{
 
    private $color;
 
    private $currentSpeed;

    private $nbSeats = 2;

    private $nbWheels = 4;

    private $energy;

    private $currentEnergyLevel;

    private $started = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }


    public function getColor(): string
    {
        return $this->color;
    }
   
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }


    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }


    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }


    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }


    public function getCurrentEnergyLevel(): int
    {
        return $this->currentEnergyLevel;
    }

    public function setCurrentEnergyLevel(int $currentEnergyLevel): void
    {
        if($currentEnergyLevel >= 0){
            $this->currentEnergyLevel = $currentEnergyLevel;
        }
    }


    public function getStarted(): boolean
    {
        return $this->started;
    }


    public function setStarted(boolean $started): string
    {
        $this->started = $started;
    }

    public function start(): string
    {
        if ($this->currentEnergyLevel > 0) {
            $this->started = true;
            return "<br><br>Car: Started !";
        } else {
            return "<br>Car: No more energy!";
        }

    }

    public function forward()
    {   $sentence = "";
        
        if($this->currentEnergyLevel > 0 && $this->started == true) {
                       
            $this->currentEnergyLevel -= 10;
            $sentence .= "<br>Car: Forward!";
            return $sentence;
        } else {
            return "<br>Car: I can't forward! No more energy!";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Car: Brake!";
        }
        $sentence .= "Car: I'm stopped!";
        return $sentence;
    }
}