<?php

namespace PauloRLima9\LaravelOpenPix\Charges\Contracts;

use PauloRLima9\LaravelOpenPix\Charges\Charge;

interface ChargeContract
{
    public function findById(string $id): array;

    public function findAll(array $params = []): array;

    public function create(Charge $charge): array;
}
