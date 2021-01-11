<?php

declare(strict_types=1);

namespace Tests\Shared\Infrastructure\PHPUnit\Module;

use Behat\Testwork\Event\Event;
use PHPUnit\Framework\MockObject\MockObject;
use Shared\Domain\Bus\Command\Command;
use Shared\Domain\Bus\Command\CommandBus;
use Shared\Domain\Bus\Command\CommandHandler;
use Shared\Domain\Bus\Event\DomainEvent;
use Shared\Domain\Bus\Event\DomainEventSubscriber;
use Shared\Domain\Bus\Event\EventBus;
use Shared\Domain\Bus\Query\Query;
use Shared\Domain\Bus\Query\QueryBus;
use Shared\Domain\Bus\Query\Response;
use Tests\Shared\Infrastructure\PHPUnit\UnitTestCase;

class ModuleUnitTestCase extends UnitTestCase
{
    private $commandBus;
    private $eventBus;
    private $queryBus;

    /**
     * @return CommandBus|MockObject
     */
    protected function commandBus()
    {
        return $this->commandBus = $this->commandBus ?: $this->mock(CommandBus::class);
    }

    /**
     * @return QueryBus|MockObject
     */
    protected function queryBus()
    {
        return $this->queryBus = $this->queryBus ?: $this->mock(QueryBus::class);
    }

    /**
     * @return EventBus|MockObject
     */
    protected function eventBus()
    {
        return $this->eventBus = $this->queryBus ?: $this->mock(EventBus::class);
    }

    protected function shouldPublishDomainEvent(DomainEvent $domainEvent): void
    {
        $this->eventBus()
            ->method('publish')
            ->with($this->isInstanceOf(get_class($domainEvent)))
            ->willReturn(null);
    }

    /**
     * @param Query $query
     * @param Response|null $response
     */
    protected function shouldMakeQuery(Query $query, Response $response = null): void
    {
        $this->queryBus()
            ->expects($this->atLeastOnce())
            ->method('ask')
            ->with($this->isInstanceOf(get_class($query)))
            ->willReturn($response);
    }

    protected function shouldNotPublishDomainEvents(): void
    {
        $this->eventBus()
            ->expects($this->never())
            ->method('publish');
    }

    /**
     * @param Command $command
     */
    protected function shouldDispatchCommand(Command $command): void
    {
        $this->commandBus()
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->equalTo($command, 1))
            ->willReturn(null);
    }

    /**
     * @param Command $command
     * @param CommandHandler $handler
     */
    protected function dispatch(Command $command, CommandHandler $handler): void
    {
        $handler->__invoke($command);
    }

    /**
     * @param DomainEvent $event
     * @param DomainEventSubscriber $subscriber
     */
    protected function publishEvent(DomainEvent $event, DomainEventSubscriber $subscriber): void
    {
        $subscribedEvents = $subscriber->subscribedTo();
        $invokedMethod = $subscribedEvents[get_class($event)];
        $subscriber->$invokedMethod($event);
    }
}