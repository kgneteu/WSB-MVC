<?php
class WikiModel
{
    private $message;

    public function __construct()
    {
        $this->message="Witaj na naszej stronie Wiki";
    }

    public function WelcomeMessage()
    {
        return $this->message;
    }
}
