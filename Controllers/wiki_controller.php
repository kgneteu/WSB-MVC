<?php
class WikiController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function Say()
    {
        return $this->model->WelcomeMessage();
    }
}
