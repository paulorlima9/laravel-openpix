<?php

namespace PauloRLima9\LaravelOpenPix\Charges\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use PauloRLima9\LaravelOpenPix\Charges\Charge;
use PauloRLima9\LaravelOpenPix\Core\Services\BaseService;
use PauloRLima9\LaravelOpenPix\Charges\Contracts\ChargeContract;
use PauloRLima9\LaravelOpenPix\Charges\Exceptions\ChargeNotFoundException;
use PauloRLima9\LaravelOpenPix\Charges\Exceptions\ChargeAlreadyCreatedException;

class ChargeService extends BaseService implements ChargeContract
{
    const BASE_API = 'https://api.openpix.com.br/api/openpix/v1';
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    public function findById(string $id): array
    {
        $uri = sprintf(self::BASE_API . '/charge/%s', $id);
        try {
            $response = $this->client->get($uri);
        } catch (ClientException $exception) {
            throw new ChargeNotFoundException(
                json_encode(['error' => 'Charge not found']),
                404
            );
        }

        return $this->success($response->getBody());
    }

    public function findAll(array $params = []): array
    {
        $uri = self::BASE_API . '/charge';
        $response = $this->client->get($uri);

        return $this->success($response->getBody());
    }

    public function create(Charge $charge): array
    {
        $uri = self::BASE_API . '/charge';
        try {
            $response = $this->client->post($uri, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'body' => json_encode($charge)
            ]);
        } catch (ClientException $exception) {
            // TODO: decide how to differentiate any type of error
            throw new ChargeAlreadyCreatedException(
                json_encode(['error' => 'Charge "correlationId" already been used.']),
                422
            );
        }

        return $this->success($response->getBody());
    }
}