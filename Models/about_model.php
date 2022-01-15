<?php

class AboutModel
{
    private $message = "Witaj na stronie about";

    public function __construct()
    {
    }

    public function WelcomeMessage()
    {
        return $this->message;
    }
}
