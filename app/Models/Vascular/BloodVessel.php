<?php

namespace app\Models\Vascular;

class BloodVessel
{
    private $clogged = false;

    /**
     * Clogs a vessel with $vesselId
     *
     * @param $vesselId
     *
     */
    public function clog($vesselId) {
        $this->clogged = true;
    }

    /**
     * @return bool
     */
    public function isClogged()
    {
        return $this->clogged;
    }

}