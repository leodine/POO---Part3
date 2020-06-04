<?php

  // Car.php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = ['human'];

    /**
     * @var string
     */
    private $energy;
    

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Skateboard
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    	}
    	return $this;
    }

    /*public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): Skateboard
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }*/
}
  
  ?>
