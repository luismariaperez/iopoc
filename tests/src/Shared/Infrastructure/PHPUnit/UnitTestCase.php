<?php

declare(strict_types=1);

namespace Tests\Shared\Infrastructure\PHPUnit;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class UnitTestCase
 * @package Tests\Shared\Infrastructure\PHPUnit
 */
abstract class UnitTestCase extends TestCase
{
    /**
     * @param $className
     * @return MockObject
     */
    protected function mock($className): MockObject
    {
        return $this->createMock($className);
    }
}
