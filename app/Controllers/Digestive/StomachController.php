<?php

namespace app\Controllers\Digestive;

class StomachController extends DigestiveBaseController
{
    /**
     * @param $food
     */
    public function digest($food)
    {
        $this->service->digest($food);
    }
}