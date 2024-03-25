<?php

namespace PauloRLima9\LaravelOpenPix\Payments\Contracts;

use PauloRLima9\LaravelOpenPix\Payments\Pix;
use PauloRLima9\LaravelOpenPix\Payments\QrCode;

interface PaymentsContract
{
    public function initPixPayment(Pix $pix): array;

    public function initQrCodePayment(QrCode $qrCode): array;

    public function confirmPayment(string $paymentCorrelationId): array;
}
