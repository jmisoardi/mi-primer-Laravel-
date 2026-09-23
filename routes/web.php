<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/* //Rutas para mostrar la vista 
Route::get('/inicio', function(){
    return view('inicio');
}); */


Route::get('/suma',function(){
    return view ('suma');
});

Route::post('/suma',function (Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input ('num2');
    $total = $num1 + $num2;

    return view('suma',['resu' => $total ]);
});



Route::get ('/resta', function(){
    return view('resta');
});

Route::post('/resta', function (Request $request) {
    $nume1 = $request->input('nume1');
    $nume2 = $request->input('nume2');
    $totalr = $nume1 - $nume2;

    return view('resta',['resta' => $totalr]);
});