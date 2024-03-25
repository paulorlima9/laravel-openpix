<?php

namespace PauloRLima9\LaravelOpenPix\Customers\Contracts;

use PauloRLima9\LaravelOpenPix\Customers\Customer;

interface CustomerContract
{
    public function findById(string $id): array;

    public function findAll(array $params = []): array;

    public function create(Customer $customer): array;
}
