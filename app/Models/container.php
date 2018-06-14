<?php

$singletonsContainer = [];

$singletonsContainer['stomach'] = \app\Models\Digestive\Stomach::getInstance();
$singletonsContainer['mouth'] = \app\Models\Digestive\Mouth::getInstance();
$singletonsContainer['heart'] = \app\Models\Vascular\Heart::getInstance();
$singletonsContainer['skin'] = \app\Models\Exocrine\Skin::getInstance();
