<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home()
    {
        $products = Product::take(4)->orderBy('created_at', 'desc')->get();
        $category = Product::take(4)->orderBy('price','asc')->get();
        $categorys = Product::take(4)->orderBy('price', 'desc')->get();
        return view("home", ['product' => $products, 'category' => $category, 'categorys' => $categorys]);
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
