<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/pizzas', function () {
    $pizza = ['type' => 'Pomodoro',
        'base' => 'cheey crust',
        'price' => 4
    ];

    return view('pizzas', $pizza);
//    return 'pizzas!';
//    return ['name' => 'veg pizzas', 'base' => 'classic'];
});
