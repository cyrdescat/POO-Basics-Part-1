<?php


class Car
{

    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var integer
     */
    private $currentSpeed = 0;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel = 100;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function start() : string
    {
        if ($this->currentSpeed <= 0) {
            $this->currentSpeed = 1;
            return "The car has started <br>";
        } else {
            return "the car is already running <br>";
        }
    }

    /**
     * @param int $speed
     * @return string
     */
    public function forward(int $speed = 25) : string
    {
        if ($this->currentSpeed <= 0) {
            return "You need to start the car ! <br>";
        } else if ($speed > 0) {
            $this->currentSpeed += $speed;
            return "We're faster ! The car is going at $this->currentSpeed" . "km/h ! <br>";
        } else {
            return "Invalid speed <br>";
        }
    }

    /**
     * @param int $brakes
     * @return string
     */
    public function brake(int $brakes = 25) : string
    {
        if ($brakes <= 0) {
            return "Invalid braking value <br>";
        } else if ($brakes >= $this->currentSpeed) {
            $this->currentSpeed = 0;
            return "We stopped ! <br>";
        } else {
            $this->currentSpeed -= $brakes;
            return "We're slower ! The car is going at $this->currentSpeed" . "km/h ! <br>";
        }
    }

    /**
     * @return int
     */
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }


}