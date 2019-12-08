<?php

/**
 * Class Cook
 */
interface ICook
{

}

/**
 * Class Cook
 */
class Cook implements ICook
{
}

/**
 * Class Restaurant
 */
class Restaurant
{
    /** @var ICook */
    private $cook;

    /**
     * Restaurant constructor.
     * @param ICook $cook
     */
    public function __construct(ICook $cook)
    {
        $this->cook = $cook;
    }

    /**
     * @return ICook
     */
    public function getCook(): ICook
    {
        return $this->cook;
    }
}

$cook = new Cook();
$restaurant = new Restaurant($cook);