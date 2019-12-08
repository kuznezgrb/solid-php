<?php

/**
 * Class Cook
 */
class Cook
{

}

/**
 * Class Restaurant
 */
class Restaurant
{
    /** @var Cook */
    private $cook;

    /**
     * Restaurant constructor.
     * @param Cook $cook
     */
    public function __construct(Cook $cook)
    {
        $this->cook = $cook;
    }

    /**
     * @return Cook
     */
    public function getCook(): Cook
    {
        return $this->cook;
    }
}
