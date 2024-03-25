<?php

namespace PauloRLima9\LaravelOpenPix\Core;

use PauloRLima9\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima9\LaravelOpenPix\Payments\Contracts\PaymentsContract;
use PauloRLima9\LaravelOpenPix\Refunds\Contracts\RefundsContract;

interface LaravelOpenPixContract
{
    public function charges(): ChargeContract;

    public function refunds(): RefundsContract;

    public function payments(): PaymentsContract;
}
