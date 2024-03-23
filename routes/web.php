<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;

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


// Router order by ranking, top to bottom
Route::get('/pizzas', [PizzaController::class, 'index']);

Route::get('/pizzas/create', [PizzaController::class, 'create']);

Route::post('/pizzas', [PizzaController::class, 'store']);

Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);
