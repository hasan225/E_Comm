<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;


Route::get('/login', function () {
    return view('login');
});


Route::post('/login',[userController::class,'login']);
Route::get('/',[productController::class,'index']);
Route::get('detail/{id}',[productController::class,'detail']);
