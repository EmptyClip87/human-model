<?php

namespace app\Controllers\Vascular;

class BloodVesselController extends VascularBaseController
{
    public function clog($vesselId)
    {
        $this->service->clog($vesselId);
    }
}