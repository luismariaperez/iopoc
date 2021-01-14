<?php

declare(strict_types=1);

namespace Challenge\App\Controller\Buy;

use Challenge\Account\Application\Buy\BuyCommand;
use Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class BuyPostController extends ApiController
{
    public function __invoke(Request $request): Response
    {
        $errors = $this->validateRequest($request);

        return $errors->count()
            ? new Response($this->formatJsonErrors($errors), Response::HTTP_BAD_REQUEST)
            : $this->createBuy($request);
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
            'fiat' => [
                new Assert\NotBlank(),
                new Assert\Type('float'),
            ],
        ]);

        $input = $request->request->all();

        return Validation::createValidator()->validate($input, $constraint);
    }

    private function createBuy(Request $request): Response
    {
        $input = $request->request->all();
        $command = new BuyCommand($input['id'], $input['fiat']);
        $this->dispatch($command);

        return new Response('', Response::HTTP_CREATED);
    }
}