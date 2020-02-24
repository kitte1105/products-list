<?php


namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    /** @var Product[] */
    private $products;

    public function findAll()
    {
        $this->products = Product::all();

        return $this->products;
    }

    public function findById($id)
    {
        return Product::findOrFail($id);
    }

    public function store($product_data)
    {
        if (!isset($product_data['product_id'])) {
            $product = new Product();
        } else {
            $product = Product::findOrFail($product_data['product_id']);
        }

        try {
            if (empty($product_data['product_id'])) {
                $product->validateAndFill($product_data, Product::$createRules);
            } else {
                $product->validateAndFill($product_data, Product::$updateRules);
            }
            $product->save();
        }
        catch (Exception $exception) {
            $this->handleError($exception);
        }


    }
}
