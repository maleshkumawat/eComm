<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    function index(){
        // return "welcom to product page";
        // return Product::all();
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
        // return 'hello';
        return view('/');
    }else{
        return redirect('/login');
    }
}
}