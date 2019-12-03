<?php

/**
 * Interface IMeal
 */
interface IMeal
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return mixed
     */
    public function toCook();
}

/**
 * Class Soup
 */
class Soup implements IMeal
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'soup';
    }

    /**
     * @inheritDoc
     */
    public function toCook()
    {
    }
}

/**
 * Class Steak
 */
class Steak implements IMeal
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'steak';
    }

    /**
     * @inheritDoc
     */
    public function toCook()
    {
    }
}

/**
 * Class Cook
 */
class Cook
{
    /**
     * @param IMeal $meal
     * @return string
     */
    public function toCook(IMeal $meal): string
    {
        $meal->toCook();
        return $meal->getName();
    }
}

$cook = new Cook();
$soup = new Soup();
echo $cook->toCook($soup);
$steak = new Steak();
echo $cook->toCook($steak);