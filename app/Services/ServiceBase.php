<?php

namespace app\Services;

include '../Models/container.php';

class ServiceBase
{
    protected $container = [];

    public function __construct()
    {
        global $singletonsContainer;
        $this->container = $singletonsContainer;
    }
}