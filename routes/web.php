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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises', function(){ 
    $paises = [
        "Colombia" => [
            "capital" => "Bogota",
            "moneda" => "Peso",
            "poblacion" => 331.4,
            "ciudades" =>[
                "Florida",
                "Miami",
                "New york"
            ]
        ],
        "Estados unidos"=> [
            "capital" => "Washington d.c",
            "moneda" => "Peso",
            "poblacion" => 45.3,
            "ciudades" =>[
                "Rosario",
                "Cordoba"
            ]
        ],
        "España"=> [
            "capital" => "Madrid",
            "moneda" => "Euro",
            "poblacion" => 47.4,
            "ciudades" =>[
                "Barcelona",
                "Sevilla",
                "Toledo"
            ]
        ],
        "Perú"=> [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 32.9,
            "ciudades" =>[
                "Cuzco",
                "Trujillo"
            ]
        ],
        "Brasil"=> [
            "capital" => "Brasilia",
            "moneda" => "Real",
            "poblacion" => 212.6,
            "ciudades" =>[
                "Rio de Janeiro",
                "Sao Paulo",
                "Manos"
            ]
        ]
    ];
    
    //mostrar vista de paises
    return view("paises")->with("paises" , $paises );
});
