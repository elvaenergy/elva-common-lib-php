<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceOptimization;

enum OptimizationAction: string
{
    case ADJUST_INDOOR_TEMPERATURE = 'ADJUST_INDOOR_TEMPERATURE';
    case ADJUST_TEMPERATURE_OFFSET = 'ADJUST_TEMPERATURE_OFFSET';
    case ADJUST_ROOM_INFLUENCE = 'ADJUST_ROOM_INFLUENCE';
}
