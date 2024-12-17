<?php

namespace Elva\Common\Lib\Enums\Asset\NormalizedDeviceData;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum DataUnit: string
{
    use Arrayable;

    case CELSIUS = '°C';
    case FAHRENHEIT = '°F';
    case KELVIN = 'K';
    case KILOWATT_HOUR = 'kWh';
    case WATT = 'W';
    case WATT_PER_SQUARE_METER = 'W/sqm';
    case PERCENTAGE = '%';
    case YEAR = 'year';
    case MONTH = 'month';
    case DAY = 'day';
    case HOUR = 'hour';
    case MINUTE = 'minute';
    case SECOND = 'second';
    case MILLISECOND = 'millisecond';
    case METER_PER_SECOND = 'm/s';
    case BAR = 'bar';

    case NONE = 'NONE';
}
