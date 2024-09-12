<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceOptimization;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum OptimizationState: string
{
    use Arrayable;
    
    case ON = 'ON';
    case OFF = 'OFF';
}

