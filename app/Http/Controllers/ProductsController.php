<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductsRepository;
use App\Entities\Product;


class ProductsController extends Controller
{
    protected $products;

    public function __construct(ProductsRepository $products)
    {
        $this->products = $products;
    }

    public function manage()
    {
        $products = $this->products->find();

        return view('products.manage', ['products' => $products]);
    }

    public function add(Request $request)
    {
        echo(var_export($request->all()));
        $validatedData = $request->validate([
            'product_data[price]' => ['required'],
            'product_data[name]' => ['required'],
        ]);

        echo(var_export($validatedData));

        //return redirect()->route('products.manage');
    }
}
