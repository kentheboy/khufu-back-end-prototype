<?php

namespace App\Http\Controllers\Khufu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khufu\Product;

class ProductController extends Controller
{
    public function list() {
        $products = Product::where('status', 1)->get();
        return $products;
    }
}
