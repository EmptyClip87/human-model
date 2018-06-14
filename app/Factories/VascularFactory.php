<?php

namespace app\Factories;

use app\Services\VascularSysService;

class VascularFactory implements IFactory
{
    /**
     * @return VascularSysService
     */
    public static function getService()
    {
        return new VascularSysService();
    }
}