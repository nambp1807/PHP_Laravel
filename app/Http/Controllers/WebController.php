<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home()
    {
        $newests = Product::orderBy('created_at','desc')->take(4)->get();
        $cheaps = Product::orderBy('price')->take(4)->get();
        $exs = Product::orderBy('price','desc')->take(4)->get();
        return view("home",['newests'=>$newests,'cheaps'=>$cheaps,'exs'=>$exs]);
    }

    public function listing($id){
        $products = Product::where("category_id",$id)->take(9)->get();

        return view("listing",['product'=>$products]);
    }

    public function product($id)
    {
        $product = Product::find($id);//tra ve 1 object Product theo id
        $category_products = Product::Where('category_id',$product->category_id)->Where('id','!=',$product->id)->take(4)->get();
        $brand_products = Product::Where('brand_id',$product->brand_id)->Where('id','!=',$product->id)->take(4)->get();

        return view('product',['product'=>$product,'category_product'=>$category_products,'brand_product'=>$brand_products]);
    }

    public function cart($id)
    {
        $product = Product::find($id);//tra ve 1 object Product theo id
        $product->update([
            "quantity" => $product->quantity-1
        ]);
        return redirect()->to("product/{$product->id}");
//        return view("cart", ['product' => $product]);
    }

}
