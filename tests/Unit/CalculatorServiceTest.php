<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculatorService;


class CalculatorServiceTest extends TestCase
{

    public function testSuma(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->suma(1, 1);

        $this->assertEquals(2, $resultado);
    }

    public function testSumaNegativa(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->suma(1, -2);

        $this->assertEquals(-1, $resultado);
    }

    public function testSumaNegativa2(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->suma(-1, -2);

        $this->assertEquals(-3, $resultado);
    }

    public function testResta(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->resta(10, 8);

        $this->assertEquals(2, $resultado);
    }

    public function testRestaNegativa(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->resta(10, -2);

        $this->assertEquals(12, $resultado);
    }

    public function testRestaNegativa2(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->resta(-10, -2);

        $this->assertEquals(-8, $resultado);
    }

    public function testMultiplicacion(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->multiplicacion(5, 2);

        $this->assertEquals(10, $resultado);
    }

    public function testMultiplicacionNegativa(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->multiplicacion(5, -2);

        $this->assertEquals(-10, $resultado);
    }

    public function testDivision(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->division(8, 2);

        $this->assertEquals(4, $resultado);
    }

    public function testDivisionNegativa(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->division(-8, -2);

        $this->assertEquals(4, $resultado);
    }

    public function testDivisionPorCero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Divisor no puede ser cero');
        
        $calculator = new CalculatorService();
        
        $calculator->division(10, 0);
    }
    
    public function testDivisionConNumeradorCero()
    {
        $calculator = new CalculatorService();
        
        $resultado = $calculator->division(0, 5);
        
        $this->assertEquals(0, $resultado);
    }

}
