<?php

namespace Elva\Common\Lib\Enums\Asset\NormalizedDeviceData\OperationStatus;

enum EHeaterOperationStatus: string
{
    case OFFLINE = 'OFFLINE';
    case HEATING_CENTRAL = 'HEATING_CENTRAL';
    case HEATING_DOMESTIC_HOT_WATER = 'HEATING_DOMESTIC_HOT_WATER';
    case COOLING = 'COOLING';
    case DEFROST = 'DEFROST';
}
