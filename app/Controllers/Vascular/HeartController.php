<?php

namespace app\Controllers\Vascular;

class HeartController extends VascularBaseController
{
    public function pumpBlood()
    {
        $this->service->pumpBlood();
    }

    /**
     * @param $vessel
     */
    public function stop($vessel)
    {
        $this->service->stop($vessel);
    }
}