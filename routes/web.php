<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

/* //Rutas para mostrar la vista 
Route::get('/inicio', function(){
    return view('inicio');
}); */


/* Route::get('/suma',function(){
    return view ('suma');
}); */

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma',[SumaController::class, 'suma']);
   





Route::get ('/resta', function(){
    return view('resta');
});

Route::post('/resta', function (Request $request) {
    $nume1 = $request->input('nume1');
    $nume2 = $request->input('nume2');
    $totalr = $nume1 - $nume2;

    return view('resta',['resta' => $totalr]);
});