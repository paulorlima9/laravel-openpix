<?php

namespace PauloRLima9\LaravelOpenPix\Transactions\Contracts;

interface TransactionContract
{
    public function findById(string $transactionId): array;

    public function findAll(array $parameters = []): array;
}