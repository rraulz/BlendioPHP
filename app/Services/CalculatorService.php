<?php

namespace App\Services;

class CalculatorService
{
    public function suma($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }

    public function resta($numero1, $numero2)
    {
        return $numero1 - $numero2;
    }

    public function multiplicacion($numero1, $numero2)
    {
        return $numero1 * $numero2;
    }

    public function division($numero1, $numero2)
    {
        if ($numero2 == 0) {
            throw new \InvalidArgumentException('Divisor no puede ser cero');
        }

        return $numero1 / $numero2;
    }
}
