<?php

namespace app\Factories;

use app\Services\DigestiveSysService;

class DigestiveFactory implements IFactory
{
    /**
     * @return DigestiveSysService
     */
    public static function getService()
    {
        return new DigestiveSysService();
    }
}