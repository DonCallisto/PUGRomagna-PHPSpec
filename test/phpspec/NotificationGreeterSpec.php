<?php

namespace test\phpspec;

use Greeter;
use Notification\Notifier;
use SimpleGreeter;
use Subject;
use PhpSpec\ObjectBehavior;

class NotificationGreeterSpec extends ObjectBehavior
{
    function let(Notifier $notifier, SimpleGreeter $simpleGreeter)
    {
        $this->beConstructedWith($notifier, $simpleGreeter);
    }

    function it_should_be_a_greeter()
    {
        $this->shouldImplement(Greeter::class);
    }

    function it_greets_a_subject(
        Subject $subject,
        SimpleGreeter $simpleGreeter
    ) {
        $msg = 'aGreetMsg';
        $simpleGreeter->greet($subject)->willReturn($msg);

        $this->greet($subject)->shouldReturn($msg);
    }

    function it_send_a_notification(
        Subject $subject,
        Notifier $notifier
    ) {
        $notifier->notify($subject)->shouldBeCalled();

        $this->greet($subject);
    }
}
