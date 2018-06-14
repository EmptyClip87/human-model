<?php

namespace app\Controllers\Vascular;

use app\Factories\VascularFactory;

class VascularBaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = VascularFactory::getService();
    }
}