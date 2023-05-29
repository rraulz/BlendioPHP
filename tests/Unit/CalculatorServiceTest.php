<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculatorService;


class CalculatorServiceTest extends TestCase
{

    public function testCalculadoraSuma(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("suma", 1, 1);

        $this->assertEquals(2, $resultado);
    }

    public function testCalculadoraResta(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("resta", 1, 10);

        $this->assertEquals(-9, $resultado);
    }

    public function testCalculadoraMultiplicacion(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("multiplicacion", 1, 1);

        $this->assertEquals(1, $resultado);
    }

    public function testCalculadoraDivision(): void
    {
        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("division", 6, 2);

        $this->assertEquals(3, $resultado);
    }

    public function testCalculadoraExceptionOperacionDesconocida(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Operacion no soportada (suma, resta, multiplicacion, division)');

        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("raizcuadrada", 6, 2);

        $this->assertEquals(3, $resultado);
    }

    public function testCalculadoraExceptionOperador1(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Operador erroneo');

        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("suma", null, 2);

        $this->assertEquals(3, $resultado);
    }

    public function testCalculadoraExceptionOperador2(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Operador erroneo');

        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("suma", 6, null);

        $this->assertEquals(3, $resultado);
    }

    public function testCalculadoraExceptionOperadorTexto(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Operador erroneo');

        $servicio = new CalculatorService();
        
        $resultado = $servicio->calculadora("suma", 6, "cinco");

        $this->assertEquals(3, $resultado);
    }


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

    public function testDivisionInexacta()
    {
        $calculator = new CalculatorService();
        
        $resultado = $calculator->division(10, 4);

        $this->assertEquals(2.5, $resultado);
    }

    public function testDivisionConDivisionPeriodica()
    {
        $calculator = new CalculatorService();

        $resultado = $calculator->division(1, 3);

        $this->assertEquals(0.3333333333333333, $resultado);
    }

}
