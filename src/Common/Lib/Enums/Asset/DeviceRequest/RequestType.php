<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceRequest;

enum RequestType: string
{
    case SYSTEM_READING = 'SYSTEM_READING';
    case SYSTEM_CONTROL = 'SYSTEM_CONTROL';
    case SYSTEM_REVERT = 'SYSTEM_REVERT';
    case USER_CONTROL = 'USER_CONTROL';
    case USER_READING = 'USER_READING';
}
