<?php

namespace app\Services;

use app\Models\Vascular\BloodVessel;
use app\Models\Vascular\Heart;

class VascularSysService extends ServiceBase
{
    public function pumpBlood()
    {
        /** @var Heart $heart */
        $heart = $this->container['heart'];

        $heart->pump();
    }

    /**
     * @param BloodVessel $vessel
     */
    public function stop(BloodVessel $vessel)
    {
        /** @var Heart $heart */
        $heart = $this->container['heart'];

        if($vessel->isClogged()) {
            $heart->stop();
        }
    }

    /**
     * @param int $vesselId
     */
    public function clog(int $vesselId)
    {
        /** @var BloodVessel $vessel */
        $vessel = $this->container['vessel'];

        $vessel->clog($vesselId);
    }
}