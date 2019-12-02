<?php


class Waiter
{
    /** @var string */
    private $order;

    /**
     * @param string $order
     */
    public function acceptOrder(string $order)
    {
        $this->order = $order;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}

/**
 * Class Cook
 */
class Cook
{
    /**
     * to cook
     * @param string $meal
     * @return string
     */
    public function toCook(string $meal): string
    {
        return $meal;
    }
}

$waiter = new Waiter();
$waiter->acceptOrder('soup');
$cook = new Cook();
$cook->toCook($waiter->getOrder());