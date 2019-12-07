<?php

/**
 * Interface IWaiter
 */
interface IWaiter
{
    /**
     * @param string $order
     * @return mixed
     */
    public function acceptOrder(string $order);
}

interface ICook
{
    /**
     * @param string $meal
     * @return mixed
     */
    public function toCook(string $meal);
}

/**
 * Class Cook
 */
class Cook implements ICook
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
class Waiter implements IWaiter
{

    /** @var string */
    private $order;

    /**
     * @inheritDoc
     */
    public function acceptOrder(string $order)
    {
        $this->order = $order;
    }
}