<?php

declare(strict_types = 1);

namespace Tests\Shared\Infrastructure\Behat;

use Behat\Behat\Context\Context;

final class ApplicationFeatureContext implements Context
{

    /** @BeforeScenario */
    public function cleanEnvironment(): void
    {
        $files = glob('/app/persistence/*');
        array_map('unlink', array_filter($files));
    }
}
