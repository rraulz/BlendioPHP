<?php

namespace App\Services;

class CalculatorService
{

    public function calculadora($operacion, $numero1, $numero2)
    {
        if($numero1 == null || $numero2 == null)
        {
            throw new \InvalidArgumentException('Operador erroneo');
        }

        if(!is_numeric($numero1) || !is_numeric($numero2))
        {
            throw new \InvalidArgumentException('Operador erroneo');
        }

        switch ($operacion) {
            case 'suma':
                return $this->suma($numero1, $numero2);
            case 'resta':
                return $this->resta($numero1, $numero2);
            case 'multiplicacion':
                return $this->multiplicacion($numero1, $numero2);
            case 'division':
                return $this->division($numero1, $numero2);
            default:
                throw new \InvalidArgumentException('Operacion no soportada (suma, resta, multiplicacion, division)');
        }
    }

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
