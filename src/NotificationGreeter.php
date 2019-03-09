<?php

use Notification\Notifier;

class NotificationGreeter implements Greeter
{
    private $notifier;

    private $simpleGreeter;

    public function __construct(Notifier $notifier, SimpleGreeter $simpleGreeter)
    {
        $this->notifier = $notifier;
        $this->simpleGreeter = $simpleGreeter;
    }

    public function greet(?Subject $subject)
    {
        $msg = $this->simpleGreeter->greet($subject);
        $this->notifier->notify($subject);

        return $msg;
    }
}
