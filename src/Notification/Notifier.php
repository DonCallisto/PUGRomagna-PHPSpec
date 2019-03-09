<?php

namespace Notification;

use Subject;

interface Notifier
{
    public function notify(Subject $subject);
}
