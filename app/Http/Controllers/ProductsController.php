<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function manage()
    {
        $products = [];
        return view('products.manage', ['products' => $products]);
    }

    public function add(Request $request)
    {
        $product_data = $request->all('product_data');

        return redirect()->route('products.manage');
    }
}
