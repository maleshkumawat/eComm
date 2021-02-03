<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
// use Illuminate\Contracts\Session;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products' => $data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id= $req->product_id;
            $cart->save();
        return redirect('/');
    }else{
        return redirect('/login');
    }
}
static function cartItem(){
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}
function CartList()
{   $userId = Session::get('user')['id'];
   $data = DB::table('cart')
    ->join('products','cart.product_id','products.id')
    ->select('products.*','cart.id as cart_id')
    ->where('cart.user_id',$userId)
    ->get();
    return view('cartlist',['products'=>$data]);
}
function RemoveProduct($id){
     Cart::destroy($id);
    return redirect('/cartlist');

}
function OrderNow(){
    $userId = Session::get('user')['id'];
   $total =  DB::table('cart')
    ->join('products','cart.product_id','products.id')
    ->where('cart.user_id',$userId)
    ->sum('products.price');
    return view('ordernow',['total'=>$total]);
}
function OrderPlace(Request $req){
    $userId = Session::get('user')['id'];
    $addCart = Cart::where('user_id',$userId)->get();
    foreach($addCart as $cart)
    {
        $order = new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status = "pending";
        $order->payment_method = $req->payment;
        $order->payment_status = "pending";
        $order->address = $req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/');
}
    function orderList(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('/myorder',['orders'=>$orders]);
    }
}