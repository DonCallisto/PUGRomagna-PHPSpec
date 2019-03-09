<?php

namespace Notification;

use Subject;

class NullNotifier implements Notifier
{
    public function notify(Subject $subject)
    {
        return;
    }
}
