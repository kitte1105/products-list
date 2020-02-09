<?php


namespace App\Repositories;

use App\Entities\Product;

class ProductsRepository
{
    /** @var Product[] */
    private $products;

    public function find()
    {
        $this->products = [
            new Product([
               'id' => 1,
               'name' => 'test',
               'code' => '123',
               'amount' => 10
            ])
        ];
        return $this->products;
    }
}
