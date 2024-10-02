<?php

namespace Elva\Common\Lib\Enums\Facility\WeatherData;

use Exception;
use Elva\Common\Lib\Enums\Traits\Arrayable;

enum NormalizedWeatherElement: string
{
    use Arrayable;

    case AVERAGE_TEMPERATURE = 'AVERAGE_TEMPERATURE';
    case MAX_TEMPERATURE = 'MAX_TEMPERATURE';
    case MIN_TEMPERATURE = 'MIN_TEMPERATURE';
    case FEELS_LIKE_TEMPERATURE = 'FEELS_LIKE_TEMPERATURE';
    case FEELS_LIKE_MAX_TEMPERATURE = 'FEELS_LIKE_MAX_TEMPERATURE';
    case FEELS_LIKE_MIN_TEMPERATURE = 'FEELS_LIKE_MIN_TEMPERATURE';
    case PRECIPITATION = 'PRECIPITATION';
    case HUMIDITY = 'HUMIDITY';
    case CLOUD_COVER = 'CLOUD_COVER';
    case PRESSURE = 'PRESSURE';
    case WIND_GUST = 'WIND_GUST';
    case WIND_SPEED = 'WIND_SPEED';
    case WIND_DIRECTION = 'WIND_DIRECTION';
    case SOLAR_RADIATION = 'SOLAR_RADIATION';
    case SOLAR_ENERGY = 'SOLAR_ENERGY';
    case VISIBILITY = 'VISIBILITY';
    case UV_INDEX = 'UV_INDEX';
    case NOT_NORMALIZED = 'NOT_NORMALIZED';

    /**
     * @throws Exception
     */
    public function getUnit(NormalizedWeatherUnitType $unitType): NormalizedWeatherUnit
    {
        return match ($this) {
            self::MAX_TEMPERATURE,
            self::MIN_TEMPERATURE,
            self::AVERAGE_TEMPERATURE,
            self::FEELS_LIKE_TEMPERATURE => match ($unitType) {
                NormalizedWeatherUnitType::US => NormalizedWeatherUnit::FAHRENHEIT,
                NormalizedWeatherUnitType::METRIC,
                NormalizedWeatherUnitType::UK => NormalizedWeatherUnit::CELSIUS,
            },

            self::PRECIPITATION => match ($unitType) {
                NormalizedWeatherUnitType::US => NormalizedWeatherUnit::INCHES,
                NormalizedWeatherUnitType::METRIC,
                NormalizedWeatherUnitType::UK => NormalizedWeatherUnit::MILLIMETERS,
            },

            self::CLOUD_COVER,
            self::HUMIDITY => NormalizedWeatherUnit::PERCENT,

            self::WIND_SPEED,
            self::WIND_GUST => match ($unitType) {
                NormalizedWeatherUnitType::US => NormalizedWeatherUnit::MPH,
                NormalizedWeatherUnitType::METRIC,
                NormalizedWeatherUnitType::UK => NormalizedWeatherUnit::KPH,
            },

            self::WIND_DIRECTION => NormalizedWeatherUnit::DEGREES,

            self::VISIBILITY => match ($unitType) {
                NormalizedWeatherUnitType::UK,
                NormalizedWeatherUnitType::US => NormalizedWeatherUnit::MILES,
                NormalizedWeatherUnitType::METRIC => NormalizedWeatherUnit::KILOMETERS,
            },

            self::PRESSURE => NormalizedWeatherUnit::MILLIBARS,

            self::SOLAR_RADIATION => NormalizedWeatherUnit::WATTS_PER_SQUARE_METER,

            self::SOLAR_ENERGY => NormalizedWeatherUnit::MEGAJOULES_PER_SQUARE_METER,

            self::UV_INDEX => NormalizedWeatherUnit::NONE,

            default => throw new Exception('Unexpected match value'),
        };
    }
}
