<?php

declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\BinaryOp\InlineIfToExplicitIfRector;

use Iterator;
use Rector\CodeQuality\Rector\BinaryOp\InlineIfToExplicitIfRector;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;

final class InlineIfToExplicitIfRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return InlineIfToExplicitIfRector::class;
    }
}