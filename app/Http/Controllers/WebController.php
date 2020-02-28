<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function classRoom(){
        // lấy dữ liệu ở đây

        $students = [
            [
                "id"=>1,
                "name"=>"Nguyễn Thế Anh",
                "email"=>"anhnt@gmail.com",
                "mark"=>9
            ],
            [
                "id"=>2,
                "name"=>"Nguyễn Thị Ninh",
                "email"=>"ninhnt@gmail.com",
                "mark"=>6
            ],
            [
                "id"=>3,
                "name"=>"Nguyễn Văn Tùng",
                "email"=>"tungnv@gmail.com",
                "mark"=>8
            ]
        ];
       return view("student_listing",['students'=>$students]);
    }
}
