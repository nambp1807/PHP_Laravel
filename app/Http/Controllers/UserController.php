<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listName(){
        $arr = [
            [
                "id"=>1,
                "name"=>"Nguyễn Thế ANh",
                "email"=>"anhnt@gmail.com",
                "date" =>"20/02/2000",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
            [
                "id"=>2,
                "name"=>"Nguyễn Văn Tùng",
                "email"=>"tungnv@gmail.com",
                "date" =>"25/01/1999",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
            [
                "id"=>3,
                "name"=>"Phạm Hồng Thái",
                "email"=>"thaiph@gmail.com",
                "date" =>"10/10/1999",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
            [
                "id"=>4,
                "name"=>"Hồ Lý Thái",
                "email"=>"thaihl@gmail.com",
                "date" =>"20/03/1995",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
            [
                "id"=>5,
                "name"=>"Nguyễn Văn Hiến",
                "email"=>"hiennv@gmail.com",
                "date" =>"15/10/1995",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
            [
                "id"=>6,
                "name"=>"Bùi Phương Nam",
                "email"=>"nambp@gmail.com",
                "date" =>"18/07/1997",
                "created"=>"20/2/2020",
                "update"=>"27/02/2020"

            ],
        ];
        return view("form_edit",['lists'=>$arr]);
    }
}
