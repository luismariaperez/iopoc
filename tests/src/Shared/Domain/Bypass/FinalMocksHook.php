<?php

declare(strict_types=1);

namespace Tests\Shared\Domain\Bypass;

use DG\BypassFinals;
use PHPUnit\Runner\BeforeTestHook;

final class FinalMocksHook implements BeforeTestHook
{
    /**
     * @param string $test
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function executeBeforeTest(string $test): void
    {
        BypassFinals::enable();
    }
}
