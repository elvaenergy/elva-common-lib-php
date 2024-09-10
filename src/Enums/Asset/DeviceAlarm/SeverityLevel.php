<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceAlarm;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum SeverityLevel: int
{
    use Arrayable;

    case LEVEL_0 = 0;
    case LEVEL_1 = 1;
    case LEVEL_2 = 2;
    case LEVEL_3 = 3;
    case LEVEL_4 = 4;
    case LEVEL_5 = 5;
}
