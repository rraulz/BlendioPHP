<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalculatorEndpointTest extends TestCase
{

    public function testEndpointSuma(): void
    {
        $response = $this->get('/suma/1/2');

        $response->assertStatus(200);
        $response->assertJson([
            'resultado' => '3'
        ]);
    }

    public function testEndpointResta(): void
    {
        $response = $this->get('/resta/4/2');

        $response->assertStatus(200);
        $response->assertJson([
            'resultado' => '2'
        ]);
    }

    public function testEndpointMultiplicacion(): void
    {
        $response = $this->get('/multiplicacion/1/2');

        $response->assertStatus(200);
        $response->assertJson([
            'resultado' => '2'
        ]);
    }

    public function testEndpointDivision(): void
    {
        $response = $this->get('/division/10/2');

        $response->assertStatus(200);
        $response->assertJson([
            'resultado' => '5'
        ]);
    }

    public function testEndpointErrorOperador(): void
    {
        $response = $this->get('/suma/1/cinco');

        $response->assertStatus(400);
        $response->assertJson([
            'error' => 'Operador erroneo',
        ]);
    }

    public function testEndpointErrorOperacion(): void
    {
        $response = $this->get('/raizCuadrada/1/2');

        $response->assertStatus(400);
        $response->assertJson([
            'error' => 'Operacion no soportada (suma, resta, multiplicacion, division)',
        ]);
    }
}
