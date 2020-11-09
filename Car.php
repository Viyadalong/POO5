<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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
    public function getParkBrake(): bool
    {
        return $this->getParkBrake;
    }
    public function setParkBrake(bool $hasParkBrake): bool
    {
        return $this->setParkBrake=$hasParkBrake;
    }

    public function start()
    {
        try {
            if ($this->setParkBrake == true) {
                throw new Exception('Park Brake is on');
            }
        } catch(Exception $e){
        echo "Exception received  : you can't drive ". $e->getMessage();
        return $this->setParkBrake(FALSE);
        }finally{
        echo "Ma voiture roule comme un donut";
        }
    }
}
