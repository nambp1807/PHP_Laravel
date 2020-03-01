<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(){
        $home = [
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
        return view("home",['home'=>$home]);
    }

    public function product(){
        $products = [
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
        return view("product",['products'=>$products]);
    }

    public function listing(){
        $listings = [

            [
                'name'=>"Ba lô A",
                'image'=>"img/cart-page/3.jpg",
                'price'=>"100$"
            ],
            [
                'name'=>"Áo Women B",
                'image'=>"img/cart-page/4.jpg",
                'price'=>"150$"
            ],
            [
                'name'=>"Mũ C",
                'image'=>"img/cart-page/5.jpg",
                'price'=>"110$"
            ],
            [
                'name'=>"Áo D",
                'image'=>"img/cart-page/6.jpg",
                'price'=>"200$"
            ],
            [
                'name'=>"Khăn Q",
                'image'=>"img/cart-page/7.jpg",
                'price'=>"180$"
            ],


        ];
        return view("listing",['listings'=>$listings]);
    }

}
