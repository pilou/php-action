<?php

namespace PhpAction;

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testFoo()
    {
        $foo = new Foo();

        $this->assertNull($foo);
    }
}
