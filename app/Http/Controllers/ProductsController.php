<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductsRepository;
use App\Http\Requests\PostStoreRequest;


class ProductsController extends Controller
{
    protected $products;

    public function __construct(ProductsRepository $products)
    {
        $this->products = $products;
    }

    public function manage()
    {
        $products = $this->products->findAll();

        return view('products.manage', ['products' => $products]);
    }

    //The example of in-Action validation. It is close to code
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'product_data.code' => ['required'],
            'product_data.name' => ['required'],
        ]);

        return $this->store($request);
    }

    public function view(Request $request)
    {
        $product = $this->products->findById($request->get('product_id'));
        return view('products.view', ['product' => $product]);
    }

    public function update(Request $request)
    {
        $product = $this->products->findById($request->get('product_id'));
        return view('products.update', ['product' => $product]);
    }

    //The example of Form Request Validation. It writes common form rules
    public function store(Request $request)
    {
        $product_data = $request->get('product_data');
        $this->products->store($product_data);

        return redirect()->route('products.manage');
    }
}
