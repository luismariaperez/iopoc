<?php

declare(strict_types=1);

namespace Challenge\App\Controller\Onboarding;

use Challenge\Account\Application\FindByCriteria\FindByCriteriaQuery;
use Challenge\Account\Application\FindByCriteria\FindByCriteriaResponse;
use Challenge\Shared\Domain\Account\FindByUserCriteria;
use Challenge\User\Application\Create\CreateUserCommand;
use Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class OnBoardingPostController extends ApiController
{
    public function __invoke(Request $request): Response
    {
        $errors = $this->validateRequest($request);

        return $errors->count()
            ? new Response($this->formatJsonErrors($errors), Response::HTTP_BAD_REQUEST)
            : $this->onBoardUser($request);
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
            'email' => [
                new Assert\NotBlank(),
                new Assert\Type('string'),
            ],
        ]);

        $input = $request->request->all();

        return Validation::createValidator()->validate($input, $constraint);
    }

    private function onBoardUser(Request $request): Response
    {
        $user = $request->request->all();

        $command = new CreateUserCommand($user['id'], $user['email']);
        $this->dispatch($command);

        $query = new FindByCriteriaQuery(
            new FindByUserCriteria($user['id'])
        );

        /** @var FindByCriteriaResponse $response */
        $response = $this->ask($query);

        return new JsonResponse(
            [
                'account' => [
                    'id' => $response->getId(),
                    'userId' => $response->getUserId(),
                    'address' => $response->getAddress(),
                    'balance' => $response->getBalance(),
                    'status' => $response->getLocked(),
                ]
            ],
            Response::HTTP_CREATED
        );
    }
}