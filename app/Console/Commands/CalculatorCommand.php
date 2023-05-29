<?php

namespace App\Console\Commands;

use App\Services\CalculatorService;
use Illuminate\Console\Command;

class CalculatorCommand extends Command
{
    protected $signature = 'operations {numero1} {numero2} {operacion}';

    protected $description = 'Realiza una operación matemática';

    protected $calculatorService;

    public function __construct(CalculatorService $calculatorService)
    {
        parent::__construct();

        $this->calculatorService = $calculatorService;
    }

    public function handle()
    {
      $operacion = $this->argument('operacion');
      $numero1 = $this->argument('numero1');
      $numero2 = $this->argument('numero2');
      
      try 
      {
          $resultado = $this->calculatorService->calculadora($operacion, $numero1, $numero2);
          $this->info('El resultado es: ' . $resultado);
      } 
      catch (\Exception $e) 
      {
        $this->error($e->getMessage());
      }
    }
}
