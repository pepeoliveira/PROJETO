<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // random order inRandomOrder()->get();
        $productsAll = Product::orderBy('price','DESC')->get();
        return view ('index',['productsAll'=>$productsAll]);
    }
}
