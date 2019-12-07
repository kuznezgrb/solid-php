<?php

/**
 * Interface RestaurantWorking
 */
interface RestaurantWorking
{
    /**
     * @param string $meal
     * @return mixed
     */
    public function toCook(string $meal);

    /**
     * @param string $order
     * @return mixed
     */
    public function acceptOrder(string $order);
}

/**
 * Class Cook
 */
class Cook implements RestaurantWorking
{

    /**
     * @inheritDoc
     */
    public function toCook(string $meal)
    {
        return $meal;
    }

    /**
     * @param string $order
     * @return mixed|void
     * @throws Exception
     */
    public function acceptOrder(string $order)
    {
        throw new Exception('Does not accept orders');
    }
}

/**
 * Class Waiter
 */
class Waiter implements RestaurantWorking
{

    /** @var string */
    private $order;

    /**
     * @param string $meal
     * @return mixed|void
     * @throws Exception
     */
    public function toCook(string $meal)
    {
        throw new Exception('Doesnt cook meal');
    }

    /**
     * @inheritDoc
     */
    public function acceptOrder(string $order)
    {
        $this->order = $order;
    }
}