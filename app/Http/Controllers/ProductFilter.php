<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProductFilter extends Controller
{
    //
    public function product()
    {
        $data=Http::get('https://fakestoreapi.com/products')->json();
        return view('product_list',['data'=>$data]);
    }
}
