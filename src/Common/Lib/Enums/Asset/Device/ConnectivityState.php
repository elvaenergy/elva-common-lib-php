<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum ConnectivityState: string
{
    use Arrayable;

    case ONLINE = 'ONLINE';
    case OFFLINE = 'OFFLINE';
    case UNKNOWN = 'UNKNOWN';
}
