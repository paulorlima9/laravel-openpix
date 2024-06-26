<?php

namespace PauloRLima\Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use PauloRLima\LaravelOpenPix\Core\LaravelOpenPixService;
use PauloRLima\LaravelOpenPix\Core\LaravelOpenPixContract;
use PauloRLima\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima\LaravelOpenPix\Refunds\Contracts\RefundsContract;
use PauloRLima\LaravelOpenPix\Payments\Contracts\PaymentsContract;
use PauloRLima\LaravelOpenPix\Webhooks\Contracts\WebhooksContract;
use PauloRLima\LaravelOpenPix\Customers\Contracts\CustomerContract;
use PauloRLima\LaravelOpenPix\Transactions\Contracts\TransactionContract;

class LaravelOpenPixServiceTest extends TestCase
{
    private $service;

    public function setUp(): void
    {
        parent::setUp();
        $this->service = new LaravelOpenPixService(new Client());
    }

    public function test_openpix_contract()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
    }

    public function test_openpix_charge_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(ChargeContract::class, $this->service->charges());
    }

    public function test_openpix_refund_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(RefundsContract::class, $this->service->refunds());
    }

    public function test_openpix_payments_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(PaymentsContract::class, $this->service->payments());
    }

    public function test_openpix_transactions_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(TransactionContract::class, $this->service->transactions());
    }

    public function test_openpix_webhooks_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(WebhooksContract::class, $this->service->webhooks());
    }

    public function test_openpix_customers_function()
    {
        $this->assertInstanceOf(LaravelOpenPixContract::class, $this->service);
        $this->assertInstanceOf(CustomerContract::class, $this->service->customers());
    }
}
