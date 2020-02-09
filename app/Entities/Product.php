<?php


namespace App\Entities;


class Product
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $code;

    /** @var int */
    private $amount;

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
}
