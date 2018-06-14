<?php

namespace app\Controllers\Digestive;

class MouthController extends DigestiveBaseController
{
    /**
     * @param $food
     */
    public function eat($food)
    {
        $this->service->eat($food);
    }

    public function whistle()
    {
        $this->service->whistle();
    }
}