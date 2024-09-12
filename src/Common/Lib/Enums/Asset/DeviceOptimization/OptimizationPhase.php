<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceOptimization;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum OptimizationPhase: string
{
    use Arrayable;

    case DATA_GATHERING = 'DATA_GATHERING';
    case OPTIMAL_BASELINE = 'OPTIMAL_BASELINE';
    case HEATING_SENSITIVITY = 'HEATING_SENSITIVITY';
    case NAIVE_CONTROL = 'NAIVE_CONTROL';
    case MODEL_BASED_CONTROL = 'MODEL_BASED_CONTROL';
    case RL_CONTROL = 'RL_CONTROL';
}
