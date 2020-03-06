<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home()
    {
        $products = Product::take(4)->orderBy('product_name', 'desc')->get();
        $category = Product::take(4)->orderBy('price')->get();
        $categorys = Product::take(4)->orderBy('price', 'desc')->get();
        return view("home", ['product' => $products, 'category' => $category, 'categorys' => $categorys]);
    }

    public function listing()
    {
        $products = Product::take(9)->get();
        return view("listing", ['product' => $products]);
    }

    public function product(Request $res)//nó request bắt được cái id nhé
    {
        $product_id = $res->get('product_id');//  key đường đẫn
        $product = Product::find($product_id);//Tìm  id trong list product để hiển thị
        $cate = $product['category_id'];
        $product = Product::where("category_id", $cate)->orderBy('product_name', 'asc')->get();
        $products = Product::take(4)->get();

        return view("product", ['product' => $product], ['products' => $products]);


    }

    public function cart()
    {
        $products = Product::where("category_id", 5)->take(10)->orderBy('product_name', 'asc')->get();// loc theo category
        return view("cart", ['product' => $products]);
    }

}
