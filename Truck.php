<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $storage;
    private int $load=0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, int $storage, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
        $this->energy = $energy;
       
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage)
    {
        $this->storage = $storage;
    }

    public function getLoad(): int 
    {   
        $sentence = "";
        while ($this->load <= $this->storage )
        {   
            $this->load += 1;
            $sentence = "In filling!";
            echo $sentence;
        }
        $sentence = "Full !";
        echo $sentence;
        $this->load = $this->load - 1;
        return $this->load;

    }

    public function setLoad(int $load)
    {
        $this->load = $load;
    }
}



