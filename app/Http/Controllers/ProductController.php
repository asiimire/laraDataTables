<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
}
