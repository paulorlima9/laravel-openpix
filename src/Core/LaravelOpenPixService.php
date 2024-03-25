<?php

namespace PauloRLima9\LaravelOpenPix\Core;

use GuzzleHttp\Client;
use PauloRLima9\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima9\LaravelOpenPix\Charges\Services\ChargeService;
use PauloRLima9\LaravelOpenPix\Customers\Contracts\CustomerContract;
use PauloRLima9\LaravelOpenPix\Customers\Services\CustomerService;
use PauloRLima9\LaravelOpenPix\Payments\Contracts\PaymentsContract;
use PauloRLima9\LaravelOpenPix\Payments\Services\PaymentsService;
use PauloRLima9\LaravelOpenPix\Refunds\Contracts\RefundsContract;
use PauloRLima9\LaravelOpenPix\Refunds\Services\RefundsService;
use PauloRLima9\LaravelOpenPix\Transaction\Contracts\TransactionContract;
use PauloRLima9\LaravelOpenPix\Transaction\Services\TransactionsService;
use PauloRLima9\LaravelOpenPix\Webhooks\Contracts\WebhooksContract;
use PauloRLima9\LaravelOpenPix\Webhooks\Services\WebhooksService;

class LaravelOpenPixService implements LaravelOpenPixContract
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function charges(): ChargeContract
    {
        return new ChargeService($this->client);
    }

    public function refunds(): RefundsContract
    {
        return new RefundsService($this->client);
    }

    public function payments(): PaymentsContract
    {
        return new PaymentsService($this->client);
    }

    public function transactions(): TransactionContract
    {
        return new TransactionsService($this->client);
    }

    public function webhooks(): WebhooksContract
    {
        return new WebhooksService($this->client);
    }

    public function customers(): CustomerContract
    {
        return new CustomerService($this->client);
    }
}
