<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

enum ConnectivityState: string
{
    case ONLINE = 'ONLINE';
    case OFFLINE = 'OFFLINE';
    case UNKNOWN = 'UNKNOWN';
}
