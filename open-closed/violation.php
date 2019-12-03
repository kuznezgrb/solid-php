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
        switch ($meal) {
            case 'soup':
                return 'soup';
            case 'steak':
                return 'steak';
            default:
                return '';
        }
    }
}

$cook = new Cook();
echo $cook->toCook('soup');
echo $cook->toCook('steak');
echo $cook->toCook('paste');