<?php

use App\Models\Doador;
use App\Http\Controllers\DoadorController;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola-mundo/', function(){
    $doadores = Doador::all();
    return view('doadores.index')->with('doadores',$doadores);
})->name('doadores.index');

Route::get('show/{id}/', function(Request $request){
    $doador = Doador::find($request->id);
    return view('doadores.show')->with('doador',$doador);
});

Route::get('create/', function(){
    return view('doadores.create');
})->name('doadores.create');

Route::post('store/', 
[DoadorController::class, 'store'])
->name('doadores.store');

Route::post('update/{id}', 
[DoadorController::class, 'edit'])
->name('doadores.update');

Route::post('store/', 
[DoadorController::class, 'store'])
->name('doadores.store');

Route::delete('delete/{id}', 
[DoadorController::class, 'delete', 'id'])
->name('piscinas.delete');