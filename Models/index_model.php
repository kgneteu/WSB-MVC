<?php

class IndexModel
{
    private $message = "Witaj na stronie głównej";

    public function __construct()
    {
    }

    public function WelcomeMessage()
    {
        return $this->message;
    }
}
