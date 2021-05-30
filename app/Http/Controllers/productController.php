<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class productController extends Controller {
    //
    public function index() {
        $data = product::all();
        return view( 'product', ['products' => $data] );
    }
    public function detail( $id ) {
        $data = product::find( $id );
        return view( 'detail', ['product' => $data] );
    }
    public function addToCart( Request $req ) {
        if ( $req->session()->has( 'user' ) ) {

            $cart = new cart;
            $cart->user_id = $req->session()->get( 'user' )['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect( '/' );

        } else {
            return redirect( 'login' );
        }
    }

    public static function cartItem() {
        $userId = Session::get( 'user' )['id'];
        return cart::where( 'user_id', $userId )->count();
    }

    public function cartLists() {
        $userId = Session::get( 'user' )['id'];
        $products = DB::table( 'carts' )
            ->join( 'products', 'carts.product_id', '=', 'products.id' )
            ->where( 'carts.user_id', $userId )
            ->select( 'products.*', 'carts.id as carts_id' )
            ->get();
        return view( 'cartList', ['products' => $products] );
    }
    public function removeCart( $id ) {
        cart::destroy( $id );
        return redirect( '/cartList' );
    }
    public function ordernow() {
        $userId = Session::get( 'user' )['id'];
        $total = $products = DB::table( 'carts' )
            ->join( 'products', 'carts.product_id', '=', 'products.id' )
            ->where( 'carts.user_id', $userId )
            ->sum( 'products.price' );
        return view( '/ordernow', ['total' => $total] );

    }
    public function orderPlace( Request $req ) {
        $userId = Session::get( 'user' )['id'];
        $allCart = cart::where( 'user_id', $userId )->get();

        foreach ( $allCart as $cart ) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->password = $req->password;
            $order->save();
            cart::where( 'user_id', $userId )->delete();
        }

        return redirect( '/' );
    }
    public function myOrders() {
        $userId = Session::get( 'user' )['id'];
        $orders= DB::table( 'orders' )
            ->join( 'products', 'orders.product_id', '=', 'products.id' )
            ->where( 'orders.user_id', $userId )
            ->get();
        return view( '/myorders', ['orders' => $orders] );

    }
}
