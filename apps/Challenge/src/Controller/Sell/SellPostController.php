<?php

declare(strict_types=1);

namespace Challenge\App\Controller\Sell;

use Challenge\Account\Application\Sell\SellCommand;
use Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class SellPostController extends ApiController
{
    public function __invoke(Request $request): Response
    {
        $errors = $this->validateRequest($request);

        return $errors->count()
            ? new Response($this->formatJsonErrors($errors), Response::HTTP_BAD_REQUEST)
            : $this->createSell($request);
    }

    private function validateRequest(Request $request): ConstraintViolationListInterface
    {
        if ('application/json' !== $request->headers->get('Content-Type')) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Invalid Content-Type');
        }

        $constraint = new Assert\Collection([
            'id' => [
                new Assert\NotBlank(),
                new Assert\Type('string'),
            ],
            'eth' => [
                new Assert\NotBlank(),
                new Assert\Type('float'),
            ],
        ]);

        $input = $request->request->all();

        return Validation::createValidator()->validate($input, $constraint);
    }

    private function createSell(Request $request): Response
    {
        $input = $request->request->all();
        $command = new SellCommand($input['id'], $input['eth']);
        $this->dispatch($command);

        return new Response('', Response::HTTP_CREATED);
    }
}