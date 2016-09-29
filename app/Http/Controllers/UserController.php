<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index() {
        $user = User::find(2);
        $products = $user->products()->get();
        return view('users.index', compact('products'));
    }
    public function storeProducts(Request $request) {
        $productIDs = $request->get('products');

        $user = User::find(2);
        $user->products()->sync($productIDs);

        return redirect()->route('users.index');
    }
}







