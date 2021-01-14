<?php

declare(strict_types=1);

namespace Challenge\App\Controller\Balance;

use Challenge\Account\Application\Find\FindQuery;
use Challenge\Account\Application\Find\FindResponse;
use Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BalanceGetController extends ApiController
{
    public function __invoke(Request $request, string $id): Response
    {
        $query = new FindQuery($id);

        /** @var FindResponse $response */
        $response = $this->ask($query);

        return new JsonResponse(
            [
                'id' => $response->getId(),
                'balance' => $response->getBalance(),
            ]
        );
    }
}