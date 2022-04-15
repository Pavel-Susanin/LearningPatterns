<?php

class Decorator extends Message
{
    protected $message = null;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function Operation()
    {
        return $this->getMessage()->Operation();
    }
}