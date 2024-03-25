<?php

namespace PauloRLima\LaravelOpenPix\Core;

use GuzzleHttp\Client;
use PauloRLima\LaravelOpenPix\Charges\Services\ChargeService;
use PauloRLima\LaravelOpenPix\Refunds\Services\RefundsService;
use PauloRLima\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima\LaravelOpenPix\Payments\Services\PaymentsService;
use PauloRLima\LaravelOpenPix\Refunds\Contracts\RefundsContract;
use PauloRLima\LaravelOpenPix\Webhooks\Services\WebhooksService;
use PauloRLima\LaravelOpenPix\Customers\Services\CustomerService;
use PauloRLima\LaravelOpenPix\Payments\Contracts\PaymentsContract;
use PauloRLima\LaravelOpenPix\Webhooks\Contracts\WebhooksContract;
use PauloRLima\LaravelOpenPix\Customers\Contracts\CustomerContract;
use PauloRLima\LaravelOpenPix\Transaction\Services\TransactionsService;
use PauloRLima\LaravelOpenPix\Transactions\Contracts\TransactionContract;

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
