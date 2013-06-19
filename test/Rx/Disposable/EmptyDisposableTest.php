<?php

namespace Rx\Disposable;

use Rx\TestCase;

class EmptyDisposableTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_disposed()
    {
        $disposable = new EmptyDisposable();

        $disposable->dispose();
    }
}
