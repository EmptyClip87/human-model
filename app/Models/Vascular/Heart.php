<?php

namespace app\Models\Vascular;

class Heart
{
    private static $instance;

    private function __construct() {
        echo 'Little human conceived.';
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function pump() {}

    public function stop() {}
}