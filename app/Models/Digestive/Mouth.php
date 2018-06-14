<?php

namespace app\Models\Digestive;

class Mouth
{
    private static $instance;

    private function __construct() {}

    /**
     * @return Mouth
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function chew($food) {}

    public function swallow() {}

    public function whistle() {}
}