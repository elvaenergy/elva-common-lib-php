<?php

namespace Elva\Common\Lib\Enums\Facility;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum ElectricityPriceType: string
{
    use Arrayable;

    case NONE = 'NONE';
    case HOURLY = 'HOURLY';
    case FIXED = 'FIXED';
}
