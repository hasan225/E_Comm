<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
   Session::forget('user');
    return redirect('login');
});
Route::view('/register', 'register');
Route::post('/login',[userController::class,'login']);
Route::post('/register',[userController::class,'register']);
Route::get('/',[productController::class,'index']);
Route::get('detail/{id}',[productController::class,'detail']);
Route::post('/add_to_cart',[productController::class,'addToCart']);
Route::any('/cartList',[productController::class,'cartLists']);
Route::any('/removecart/{id}',[productController::class,'removeCart']);
Route::any('/ordernow',[productController::class,'orderNow']);
Route::any('/orderplace',[productController::class,'orderPlace']);
Route::any('/myorders',[productController::class,'myOrders']);
