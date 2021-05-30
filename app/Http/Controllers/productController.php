<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data=product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){

           $cart=new cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else{
            return redirect('login');
        }
    }

   static function cartItem(){
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

    function cartLists(){
        $userId=Session::get('user')['id'];
       $products=DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userId)
       ->select('products.*','carts.id as carts_id')
       ->get();
       return view('cartList',['products'=>$products]);
    }
    function removeCart($id){
        cart::destroy($id);
        return redirect('/cartList');
    }
    function ordernow(){
        $userId = Session::get( 'user' )['id'];
    $total= $products = DB::table( 'carts' )
    ->join( 'products', 'carts.product_id', '=', 'products.id' )
    ->where( 'carts.user_id', $userId )
    ->sum('products.price');
    return view( '/ordernow', ['total' => $total] );

    }
}
