<?php

/**
 * Class Cook
 */
class Cook
{
    /** @var string */
    private $order;
    /** @var string */
    private $meal;

    /**
     * @param string $order
     */
    public function acceptOrder(string $order)
    {
        $this->order = $order;
    }

    /**
     * to cook
     */
    public function toCook()
    {
        $this->meal = $this->order;
    }
}

$cook = new Cook();
$cook->acceptOrder('soup');
$cook->toCook();