<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Brands;
class ProductsController extends Controller
{
    //
    public function index()
    {
        $categories = Categories::orderBy('queue')->get();
        $brands = Brands::orderBy('queue')->get();
        return view('layouts.products',['categories'=>$categories,'brands'=>$brands]);
    }
}
