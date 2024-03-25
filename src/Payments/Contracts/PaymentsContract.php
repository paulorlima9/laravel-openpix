<?php

namespace PauloRLima\LaravelOpenPix\Payments\Contracts;

use PauloRLima\LaravelOpenPix\Payments\Pix;
use PauloRLima\LaravelOpenPix\Payments\QrCode;

interface PaymentsContract
{
    public function initPixPayment(Pix $pix): array;

    public function initQrCodePayment(QrCode $qrCode): array;

    public function confirmPayment(string $paymentCorrelationId): array;
}
