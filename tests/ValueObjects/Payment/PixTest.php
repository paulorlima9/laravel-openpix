<?php

namespace PauloRLima9\Tests\ValueObjects\Payment;

use PauloRLima9\LaravelOpenPix\Payments\Exceptions\PaymentMethodNotAcceptedException;
use PauloRLima9\LaravelOpenPix\Payments\Pix;
use PHPUnit\Framework\TestCase;

class PixTest extends TestCase
{
    public function test_selected_pix_type_should_be_listed()
    {
        $this->expectException(PaymentMethodNotAcceptedException::class);
        new Pix(
            'test',
            'paulorlima333@gmail.com',
            'unknown',
            1000
        );
    }
}