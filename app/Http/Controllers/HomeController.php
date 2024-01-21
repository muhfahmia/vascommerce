<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(Request $request) {
        $getProduct = Product::where('status','Active')->limit(10)->get();
        $getProductNew = Product::where('status','Active')->offset(10)->limit(5)->get();
        $data = array(
            'productsNew' => $getProductNew,
            'products' => $getProduct
        );
        return view("home.home", $data);
    }
}
