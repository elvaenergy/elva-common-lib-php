<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum DeviceState: string
{
    use Arrayable;

    case WORKING = 'WORKING';
    case ERROR = 'ERROR';
    case WARNING = 'WARNING';
    case OFFLINE = 'OFFLINE';
    case UNKNOWN = 'UNKNOWN';
}
