<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

enum DeviceState: string
{
    case WORKING = 'WORKING';
    case ERROR = 'ERROR';
    case WARNING = 'WARNING';
    case OFFLINE = 'OFFLINE';
    case UNKNOWN = 'UNKNOWN';
}
