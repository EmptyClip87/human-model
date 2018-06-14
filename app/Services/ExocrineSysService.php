<?php

namespace app\Services;

use app\Models\Exocrine\Skin;

class ExocrineSysService extends ServiceBase
{
    /**
     * @param $temperature
     */
    public function sweat(float $temperature)
    {
        /** @var Skin $skin */
        $skin = $this->container['skin'];

        if($temperature > $skin->getBearableTemperature()) {
            $skin->sweat();
        }
    }
}