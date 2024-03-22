<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercadoControlador;

Route::get('/',[MercadoControlador::class,'index']);
Route::get('/estoque', [MercadoControlador::class,'estoque']);
Route::get('/fornecedores', [MercadoControlador::class,'fornecedores']);
Route::get('/funcionarios', [MercadoControlador::class,'funcionarios']);
    
/* 

Route :: get('/cliente/{id}',function ($id)
{
    return view('cliente',['id' => $id]); 
})

*/

