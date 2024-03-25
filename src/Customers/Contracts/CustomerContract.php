<?php

namespace PauloRLima\LaravelOpenPix\Customers\Contracts;

use PauloRLima\LaravelOpenPix\Customers\Customer;

interface CustomerContract
{
    public function findById(string $id): array;

    public function findAll(array $params = []): array;

    public function create(Customer $customer): array;
}
