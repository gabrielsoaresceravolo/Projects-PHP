<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hamburgueriaControlador;

Route::get('/',[hamburgueriaControlador::class,'index']);

Route::get('/estoque', [hamburgueriaControlador::class,'estoque']);

Route::get('/fornecedor', [hamburgueriaControlador::class,'fornecedor']);
    
/* 

Route :: get('/cliente/{id}',function ($id)
{
    return view('cliente',['id' => $id]); 
})

*/