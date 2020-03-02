<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{


      private  $allproducts = [
            [
                'name'=>"Áo Man",
                'image'=>"img/cart-page/1.jpg",
                'price'=>"10$",
                'prices'=>"15$"
            ],
            [
                'name'=>"Giầy Lucci",
                'image'=>"img/cart-page/2.jpg",
                'price'=>"15$",
                'prices'=>"52$"
            ],
            [
                'name'=>"Ba lô",
                'image'=>"img/cart-page/3.jpg",
                'price'=>"18$",
                'prices'=>"35$"
            ],
            [
                'name'=>"Áo Women",
                'image'=>"img/cart-page/4.jpg",
                'price'=>"19$",
                'prices'=>"55$"
            ],
            [
                'name'=>"Mũ",
                'image'=>"img/cart-page/5.jpg",
                'price'=>"11$",
                'prices'=>"85$"
            ],
            [
                'name'=>"Áo ",
                'image'=>"img/cart-page/6.jpg",
                'price'=>"20$",
                'prices'=>"65$"
            ],
            [
                'name'=>"Khăn",
                'image'=>"img/cart-page/7.jpg",
                'price'=>"18$",
                'prices'=>"28$"
            ],
            [
                'name'=>"Túi Sách",
                'image'=>"img/cart-page/8.jpg",
                'price'=>"5$",
                'prices'=>"10$"
            ],
            [
                'name'=>"Áo Man",
                'image'=>"img/cart-page/1.jpg",
                'price'=>"10$",
                'prices'=>"30$"
            ],
         ];
    private function getProductByID($id)
    {
        foreach ($this->allProducts as $key => $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }
    public function home(){
        return view("home")->with('home',$this->allproducts);
    }
    public function product(){
        return view("product")->with('products',$this->allproducts);
    }
    public function listing(){
        return view("listing")->with('listing',$this->allproducts);
    }
    public function productDetail($id)
    {
        if ($this->getProductByID($id)) {
            return view('product_detail')->with('product', $this->getProductByID($id));
        } else {
            return redirect()->route('product', ["error" => "San pham khong ton tai"]);
        }
    }
}
