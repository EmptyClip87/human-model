<?php

namespace app\Factories;

use app\Services\ExocrineSysService;

class ExocrineFactory implements IFactory
{
    /**
     * @return ExocrineSysService
     */
    public static function getService()
    {
        return new ExocrineSysService();
    }
}