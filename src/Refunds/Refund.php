<?php

namespace PauloRLima9\LaravelOpenPix\Refunds;

use JsonSerializable;

class Refund implements JsonSerializable
{
    private $transactionEndToEndId;
    private $correlationId;
    private $value;

    public function __construct(
        string $correlationId,
        string $transactionEndToEndId,
        int $value
    ) {
        $this->correlationId = $correlationId;
        $this->transactionEndToEndId = $transactionEndToEndId;
        $this->value = $value;
    }

    public function jsonSerialize(): array
    {
        return [
            'correlationID' => $this->correlationId,
            'transactionEndToEndId' => $this->transactionEndToEndId,
            'value' => $this->value,
        ];
    }
}