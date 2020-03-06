<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home()
    {
        $newests = Product::orderBy('created_at','desc')->take(10)->get();
        // $products = Products::orderBy('created_at','desc')->take(10)->get();
        $cheaps = Product::orderBy('price','asc')->take(10)->get();
        $exs = Product::orderBy('price','desc')->take(10)->get();
        return view("home",['newests'=>$newests,'cheaps'=>$cheaps,'exs'=>$exs]);
    }

    public function listing()
    {
        $products = Product::take(9)->orderBy('created_at','desc')->get();
        return view("listing", ['product' => $products]);
    }

    public function product(Request $res)//nó request bắt được cái id nhé
    {
        $product = Product::find(1);//tra ve 1 object Product theo id
        $category_products = Product::Where('category_id',$product->category_id)->Where('id','!=',$product->id)->take(10)->get();
        $brand_products = Product::Where('brand_id',$product->brand_id)->Where('id','!=',$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_products,'brand_id'=>$brand_products]);
    }

    public function cart()
    {
        $products = Product::where("category_id", 5)->take(10)->orderBy('product_name', 'asc')->get();// loc theo category
        return view("cart", ['product' => $products]);
    }

}
