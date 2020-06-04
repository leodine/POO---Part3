<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct(int $nbLane=2, int $maxSpeed=50)
    {
	$this->nbLane = $nbLane;
	$this->maxSpeed = $maxSpeed;
    }
    
    public function addVehicule(Vehicle $vehicle): ResidentialWay
    {
    	if (isset($vehicle))
    	{
		array_push($this->getCurrentVehicles(), $vehicle);
	}
	return $this;
    }
}

?>
