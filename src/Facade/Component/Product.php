<?php

namespace App\Facade\Component;

final class Product
{
    protected string $uuid;

    protected string $name;

    protected int $barCode;

    protected int $stock = 0;

    protected float $price;

    protected bool $isOnMarketplace = false;

    public function isOnMarketplace(): bool
    {
        return $this->isOnMarketplace;
    }

    public function setIsOnMarketplace(bool $isOnMarketplace): Product
    {
        $this->isOnMarketplace = $isOnMarketplace;
        return $this;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Product
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    public function getBarCode(): int
    {
        return $this->barCode;
    }

    public function setBarCode(int $barCode): Product
    {
        $this->barCode = $barCode;
        return $this;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): Product
    {
        $this->stock = $stock;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }
}