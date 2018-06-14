<?php

namespace app\Models\Digestive;

class Stomach
{
    private static $instance;

    private function __construct() {}

    /**
     * @return Stomach
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function digest($food) {}
}