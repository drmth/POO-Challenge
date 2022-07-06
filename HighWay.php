<?php

abstract class HighWay 
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    abstract public function addVehicles(Vehicle $vehicle);

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function setCurrentVehicule(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicule(): array
    {
        return $this->currentVehicles;
    }

    public function setNbLane(int $nbLane): void
    {
        if ($nbLane > 0) {
            $this->nbLane = $nbLane;
        }
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void 
    {
        if ($maxSpeed > 0) {
            $this->maxSpeed = $maxSpeed;
        }
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}

?>