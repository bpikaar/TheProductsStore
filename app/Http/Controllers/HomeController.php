<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('home.index', compact('products'));
    }
}











