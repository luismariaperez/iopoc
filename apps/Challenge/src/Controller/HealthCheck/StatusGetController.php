<?php

declare(strict_types=1);

namespace Challenge\App\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\Response;

final class StatusGetController
{
    public function __invoke(): Response
    {
        return new Response();
    }
}