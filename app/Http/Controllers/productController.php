<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }
}
