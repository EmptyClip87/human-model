<?php

namespace app\Controllers\Exocrine;

class SkinController extends ExocrineBaseController
{
    /**
     * @param $temperature
     */
    public function sweat($temperature)
    {
        $this->service->sweat($temperature);
    }
}