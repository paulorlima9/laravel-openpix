<?php

namespace PauloRLima9\LaravelOpenPix\Refunds\Contracts;

use PauloRLima9\LaravelOpenPix\Refunds\Refund;

interface RefundsContract
{
    public function findById(string $refundId): array;

    public function findAll(array $parameters = []): array;

    public function create(Refund $refund): array;
}