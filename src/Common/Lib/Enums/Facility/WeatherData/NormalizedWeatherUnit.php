<?php

namespace Elva\Common\Lib\Enums\Facility\WeatherData;

enum NormalizedWeatherUnit: string
{
    case FAHRENHEIT = 'F';
    case CELSIUS = 'C';
    case KELVIN = 'K';
    case INCHES = 'inches';
    case CENTIMETERS = 'cm';
    case MILLIMETERS = 'mm';
    case PERCENT = '%';
    case MPH = 'mph';
    case KPH = 'kph';
    case METERS_PER_SECOND = 'm/s';
    case DEGREES = 'degrees';
    case MILES = 'miles';
    case KILOMETERS = 'km';
    case MILLIBARS = 'mbar';
    case HECTOPASCALS = 'hPa';
    case WATTS_PER_SQUARE_METER = 'W/m2';
    case MEGAJOULES_PER_SQUARE_METER = 'MJ/m2';

    case NONE = '';
}
