<?php

namespace PauloRLima\LaravelOpenPix\Charges\Contracts;

use PauloRLima\LaravelOpenPix\Charges\Charge;

interface ChargeContract
{
    public function findById(string $id): array;

    public function findAll(array $params = []): array;

    public function create(Charge $charge): array;
}
