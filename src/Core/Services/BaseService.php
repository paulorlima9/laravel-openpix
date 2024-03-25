<?php

namespace PauloRLima\LaravelOpenPix\Core\Services;

abstract class BaseService
{
    protected function success(string $body): array
    {
        return json_decode($body, true);
    }
}
