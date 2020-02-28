<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(){
        $products = [
           [
               'name'=>"Áo Luci",
               'image'=>"img/cart-page/product-1.jpg",
               'price'=>"10$"
           ],
            [
                'name'=>"Áo Luci",
                'image'=>"img/cart-page/product-2.jpg",
                'price'=>"10$"
            ],
            [
                'name'=>"Áo Luci",
                'image'=>"img/cart-page/product-3.jpg",
                'price'=>"10$"
            ],
            [
                'name'=>"Áo Luci",
                'image'=>"img/cart-page/product-1.jpg",
                'price'=>"10$"
            ],
            [
                'name'=>"Áo Luci",
                'image'=>"img/cart-page/product-3.jpg",
                'price'=>"10$"
            ],

        ];
        return view("home",['products'=>$products]);
    }

    public function product(){
        return view('product');
    }

    public function listing(){
        return view("listing");
    }

}
