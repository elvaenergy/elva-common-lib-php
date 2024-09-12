<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceOptimization;

use Exception;
use Elva\Common\Lib\Enums\Traits\Arrayable;

enum OptimizationMode: string
{
    use Arrayable;

    case NONE = 'NONE';
    case SAVINGS = 'SAVINGS';
    case BALANCED = 'BALANCED';
    case COMFORT = 'COMFORT';

    /**
     * @throws Exception
     */
    public function temperatureTolerance(): float
    {
        return match ($this) {
            self::SAVINGS => 1.5,
            self::BALANCED => 1.0,
            self::COMFORT => 0.5,
            self::NONE => throw new Exception('To be implemented'),
        };
    }
}
