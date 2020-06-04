<?php

require_once 'Vehicle.php';

abstract class HighWay
{

    /**
    * @var array
    */
    protected $currentVehicles;
    
    /**
    * @var int
    */
    protected $nbLane;
    
    /**
    * @var int
    */
    protected $maxSpeed;
    
    
    abstract public function addVehicule(Vehicle $vehicle);
    

    protected function __construct(int $nbLane, int $maxSpeed)
    {
	$this->nbLane = $nbLane;
	$this->maxSpeed = $maxSpeed;
    }
    
    
    protected function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    
    protected function setCurrentVehicles(array $currentVehicles): HighWay
    {        
    	$this->currentVehicles = $currentVehicles;
    	return $this;        
    }

    protected function getNbLane(): int
    {
        return $this->nbLane;
    }

    protected function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    protected function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    protected function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
    
}    
?>
