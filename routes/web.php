<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Grupo de rota
Route::prefix('teste')->group(function () {
    //rota 1
    Route::get('/', function () {
        return "Digite algum valor para iniciar os cálculos! 
        <br>Se digitar 1 valor será multiplicado por 3 
        <br>Se digitar 2 valores serão somados entre si. 
        <br><span style='color:gray;'>#Parâmetros separados por /</span>";
    })->name('calc');
    //rota 2
    Route::get('/{y1}', function ($y1) {
        $y2 = $y1 * 3;
        return "Valor digitado:  <strong style='color:red;font-size:1.1em;'>{$y1}.</strong> 
        <br> <strong style='color:red;font-size:1.1em;'>{$y1}</strong> <strong style='font-size:0.9em;'> x </strong>  <strong style='color:blue;'>3</strong> <strong style='font-size:0.9em;'> = </strong> <strong style='color:green;'>{$y2}.</strong>";
    })->name('calcA');
    //rota 3
    Route::get('/{x1?}/{x2?}', function ($x1=null, $x2=null) {
        if ($x2 == null){
            $x2 = 0;
        }
        $y = $x1 + $x2;
        return "<strong>Você digitou dois valores.</strong> 
        <br> A = <strong style='color:blue;font-size:1.1em;'>    {$x1}</strong> <span style='color:gray;font-size:0.8em;'>// primeiro valor digitado </span> 
        <br> B =     <strong style='color:red;font-size:1.1em;'>{$x2}</strong>  <span style='color:gray;font-size:0.8em;'>// segundo valor digitado </span>  
        <br> <strong style='color:blue;font-size:1.1em;'>{$x1}</strong> <strong> + </strong> <strong style='color:red;font-size:1.1em;'>{$x2}</strong>  <strong> = </strong>  <strong style='color:green;font-size:1.1em;'>{$y}.</strong>";
    })->name('calcAB');
    

});

Route::get('/teste2/{z?}', function ($z=null) {
    if($z){
        $z *= 7;
        $z = "<span style='color:blue;'>Você digitou</span> <strong style='color:red;'>{$z}</strong>";   
    }else{
        $z = '';
    }
    return "Rota de teste2! 
    <br>Se digitar 1 valor será multiplicado por 7 
    <br><span style='color:gray;'>#Parâmetros não obrigatório</span>
    <br>{$z}";
    
})->name('calc2');





Route::get('/', function () {
    return view('welcome');
});
