<?php

/**
 * Class Cook
 */
class Cook
{
    /**
     * @param string $meal
     * @return string
     */
    public function toCook(string $meal): string
    {
        return $meal;
    }
}

/**
 * Class CookFastFood
 */
class CookFastFood extends Cook
{
    /**
     * @param string $meal
     * @return string
     */
    public function toCook(string $meal): string
    {
        return $meal . 'fast_food';
    }
}