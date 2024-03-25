<?php

namespace PauloRLima\LaravelOpenPix\Refunds\Contracts;

use PauloRLima\LaravelOpenPix\Refunds\Refund;

interface RefundsContract
{
    public function findById(string $refundId): array;

    public function findAll(array $parameters = []): array;

    public function create(Refund $refund): array;
}
