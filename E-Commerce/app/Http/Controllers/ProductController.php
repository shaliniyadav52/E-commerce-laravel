<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //for product
     public function index(){
         $data=Product::all();//to fetch all data
         return view('product', ['products'=>$data]);
     }
}
