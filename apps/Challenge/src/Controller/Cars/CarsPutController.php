<?php

declare(strict_types=1);

namespace Challenge\App\Controller\Cars;

use Shared\Domain\Bus\Command\CommandBus;
use Shared\Domain\Bus\Query\Response;
use Symfony\Component\HttpFoundation\Request;

class CarsPutController
{
    /**
     * @var CommandBus
     */
    private $bus;

    /**
     * CarsPutController constructor.
     * @param CommandBus $bus
     */
    public function __construct(CommandBus $bus)
    {
        $this->bus = $bus;
    }

    public function __invoke(Request $request): Response
    {

    }
}