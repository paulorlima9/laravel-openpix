<?php

namespace PauloRLima\LaravelOpenPix\Core;

use PauloRLima\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima\LaravelOpenPix\Refunds\Contracts\RefundsContract;
use PauloRLima\LaravelOpenPix\Payments\Contracts\PaymentsContract;

interface LaravelOpenPixContract
{
    public function charges(): ChargeContract;

    public function refunds(): RefundsContract;

    public function payments(): PaymentsContract;
}
