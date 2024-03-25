<?php

namespace PauloRLima\LaravelOpenPix\Webhooks\Contracts;

use PauloRLima\LaravelOpenPix\Webhooks\Webhook;

interface WebhooksContract
{
    public function create(Webhook $webhook): array;

    public function findAll(array $parameters = []): array;

    public function delete(string $webhookId): array;
}
