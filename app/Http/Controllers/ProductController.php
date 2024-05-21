<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        return view("products.index");
    }

    public function create(){
        return view("products.create");
    }
    public function store(Request $request){
      Product::create([
        "name"=> $request->name,
        "price"=> $request->price,
        'descricao'=>$request->descricao
      ]);
    }
}
