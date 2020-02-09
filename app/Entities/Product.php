<?php


namespace App\Entities;


class Product
{
    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $code;

    /** @var int */
    public $amount;

    /** @var float */
    public $price;

    public function __construct($product_data)
    {
        $this->id = !empty($product_data['id']) ? $product_data['id'] : 0;
        $this->name = !empty($product_data['name']) ? $product_data['name'] : '';
        $this->code = !empty($product_data['code']) ? $product_data['code'] : '';
        $this->amount = !empty($product_data['amount']) ? $product_data['amount'] : 0;

        return $product_data;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id'     => $this->getId(),
            'code'   => $this->getCode(),
            'name'   => $this->getName(),
            'amount' => $this->getAmount()
        ];
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
