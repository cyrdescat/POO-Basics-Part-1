<?php


class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats = 1;

    /**
     * @var integer
     */
    private $nbWheels = 2;

    /**
     * Bicycle constructor.
     * @param string $color
     * @param int $currentSpeed
     * @param int $nbSeats
     * @param int $nbWheels
     */


    /**
     * Bicycle constructor.
     * @param $color
     * @param $currentSpeed
     * @param $nbSeats
     * @param $nbWheels
     */
    public function __construct($color, $currentSpeed, $nbSeats, $nbWheels)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return string
     */
    public function forward() : string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    /**
     * @return string
     */
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return void
     */
    public function setColor($color) : void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed($currentSpeed) : void
    {
        if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }

    }

    /**
     * @return int
     */
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     * @return void
     */
    public function setNbSeats($nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     * @return void
     */
    public function setNbWheels($nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

}