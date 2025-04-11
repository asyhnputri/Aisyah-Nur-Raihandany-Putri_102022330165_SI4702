<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product.index', compact('data'));
    }
}
