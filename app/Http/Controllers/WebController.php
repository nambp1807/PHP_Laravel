<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(){
        $products = [
           [
               'name'=>"Áo Man",
               'image'=>"img/cart-page/1.jpg",
               'price'=>"10$"
           ],
            [
                'name'=>"Giầy Lucci",
                'image'=>"img/cart-page/2.jpg",
                'price'=>"15$"
            ],
            [
                'name'=>"Ba lô",
                'image'=>"img/cart-page/3.jpg",
                'price'=>"18$"
            ],
            [
                'name'=>"Áo Women",
                'image'=>"img/cart-page/4.jpg",
                'price'=>"19$"
            ],
            [
                'name'=>"Mũ",
                'image'=>"img/cart-page/5.jpg",
                'price'=>"11$"
            ],
            [
                'name'=>"Áo ",
                'image'=>"img/cart-page/6.jpg",
                'price'=>"20$"
            ],
            [
                'name'=>"Khăn",
                'image'=>"img/cart-page/7.jpg",
                'price'=>"18$"
            ],
            [
                'name'=>"Túi Sách",
                'image'=>"img/cart-page/8.jpg",
                'price'=>"5$"
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
