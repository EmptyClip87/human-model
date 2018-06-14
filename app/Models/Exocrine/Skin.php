<?php

namespace app\Models\Exocrine;

class Skin
{
    private $bearableTemperature;
    private static $instance;

    private function __construct() {}

    /**
     * @return Skin
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function sweat() {}

    /**
     * @return float
     */
    public function getBearableTemperature()
    {
        return $this->bearableTemperature;
    }
}