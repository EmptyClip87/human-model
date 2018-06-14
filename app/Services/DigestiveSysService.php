<?php

namespace app\Services;

use app\Models\Digestive\Mouth;
use app\Models\Digestive\Stomach;

class DigestiveSysService extends ServiceBase
{
    /**
     * @param $food
     */
    public function eat($food)
    {
        /** @var Mouth $mouth */
        $mouth = $this->container['mouth'];

        $mouth->chew($food);
        $mouth->swallow();
    }

    public function whistle()
    {
        /** @var Mouth $mouth */
        $mouth = $this->container['mouth'];

        $mouth->whistle();
    }

    /**
     * @param $food
     */
    public function digest($food)
    {
        /** @var Stomach $stomach */
        $stomach = $this->container['stomach'];

        $stomach->digest($food);
    }
}