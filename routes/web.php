<?php

use Illuminate\Support\Facades\Route;
use App\Services\CalculatorService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{operacion}/{numero1}/{numero2}', function ($operacion, $numero1, $numero2, CalculatorService $calculatorService) {

    try 
    {
        $resultado = $calculatorService->calculadora($operacion, $numero1, $numero2);
        return response()->json(['resultado' => $resultado]);
    } 
    catch (\Exception $e) 
    {
        return response()->json(['error' => $e->getMessage()], 400);
    }
});