<?php

class SimpleGreeter implements Greeter
{
    public function greet(?Subject $subject)
    {
        $msg = 'Hello';

        if ($subject) {
            $msg .= " {$subject->getName()}";
        }

        return $msg;
    }
}
