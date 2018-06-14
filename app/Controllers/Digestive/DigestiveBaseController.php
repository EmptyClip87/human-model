<?php

namespace app\Controllers\Digestive;

use app\Factories\DigestiveFactory;

class DigestiveBaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = DigestiveFactory::getService();
    }
}