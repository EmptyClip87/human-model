<?php

namespace app\Controllers\Exocrine;

use app\Factories\ExocrineFactory;

class ExocrineBaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = ExocrineFactory::getService();
    }
}