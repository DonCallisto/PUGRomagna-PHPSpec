<?php

namespace test\phpspec;

use Greeter;
use Subject;
use PhpSpec\ObjectBehavior;

class SimpleGreeterSpec extends ObjectBehavior
{
    function it_is_a_greeter()
    {
        $this->shouldImplement(Greeter::class);
    }

    function it_greets()
    {
        $this->greet(null)->shouldReturn('Hello');
    }

    function it_greets_a_subject(Subject $subject)
    {
        $name = 'PUGRomagna';
        $subject->getName()->willReturn($name);

        $this->greet($subject)->shouldReturn("Hello {$name}");
    }
}
