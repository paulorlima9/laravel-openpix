<?php

namespace PauloRLima9\LaravelOpenPix\Webhooks\Contracts;

use PauloRLima9\LaravelOpenPix\Webhooks\Webhook;

interface WebhooksContract
{
    public function create(Webhook $webhook): array;

    public function findAll(array $parameters = []): array;

    public function delete(string $webhookId): array;
}