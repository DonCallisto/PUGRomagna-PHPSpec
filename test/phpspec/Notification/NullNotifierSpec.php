<?php

namespace test\phpspec\Notification;

use Notification\Notifier;
use PhpSpec\ObjectBehavior;

class NullNotifierSpec extends ObjectBehavior
{
    function it_is_a_notifier()
    {
        $this->shouldBeAnInstanceOf(Notifier::class);
    }
}
