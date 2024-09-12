<?php

namespace Elva\Common\Lib\Enums\NordPool;

use Elva\Common\Lib\Enums\Traits\Arrayable;
use InvalidArgumentException;

enum NordPoolRegionCode: string
{
    use Arrayable;

    // LEGACY
    case OSLO = 'OSLO';
    case KR_SAND = 'KR.SAND';
    case BERGEN = 'BERGEN';
    case TRONDHEIM = 'TR.HEIM';
    case MOLDE = 'MOLDE';
    case TROMSO = 'TROMSØ';
    case DE_LU = 'DE-LU';

    // New endpoint
    case NONE = 'NONE';
    case NO1 = 'NO1';
    case NO2 = 'NO2';
    case NO3 = 'NO3';
    case NO4 = 'NO4';
    case NO5 = 'NO5';
    case SE1 = 'SE1';
    case SE2 = 'SE2';
    case SE3 = 'SE3';
    case SE4 = 'SE4';
    case FI = 'FI';
    case DK1 = 'DK1';
    case DK2 = 'DK2';
    case EE = 'EE';
    case LT = 'LT';
    case LV = 'LV';
    case AT = 'AT';
    case BE = 'BE';
    case GER = 'GER';
    case FR = 'FR';
    case NL = 'NL';
    case PL = 'PL';

    public static function getCurrency(NordPoolRegionCode $region): NordPoolCurrency
    {
        return match ($region) {
            self::NO1, self::NO2, self::NO3, self::NO4, self::NO5 => NordPoolCurrency::NOK,
            self::SE1, self::SE2, self::SE3, self::SE4 => NordPoolCurrency::SEK,
            self::DK1, self::DK2 => NordPoolCurrency::DKK,
            self::FI,
            self::EE,
            self::LT,
            self::LV,
            self::AT,
            self::BE,
            self::GER,
            self::FR,
            self::NL,
            self::PL => NordPoolCurrency::EUR,
            default => throw new InvalidArgumentException("Unknown region: $region->value"),
        };
    }

    public function currency(): NordPoolCurrency
    {
        return self::getCurrency($this);
    }
}
