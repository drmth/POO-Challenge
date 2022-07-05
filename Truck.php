<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $load;

    public const ALLOWED_ENERGIES = [
        'diesel',
        'electric',
    ];

    public  function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity= $capacity;
    }

    public function isFull($load): string
    {
        $this->load = $load;
        if ($load < $this->getCapacity()) {
            return "In filling";
        } else {
            return "Full";
        }
    }
}

?>