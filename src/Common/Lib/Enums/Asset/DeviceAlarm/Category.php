<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceAlarm;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum Category: string
{
    use Arrayable;

    case MANUFACTURER_FAULT = 'MANUFACTURER_FAULT';
    case INSTALLATION_FAULT = 'INSTALLATION_FAULT';
    case SETTING_FAULT = 'SETTING_FAULT';
}
