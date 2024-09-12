<?php

namespace Elva\Common\Lib\Enums\NordPool;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum NordPoolRegionGroupCode: string
{
    use Arrayable;

    case NO = 'NO';
    case SE = 'SE';
    case FI = 'FI';
    case DK = 'DK';
    case EE = 'EE';
    case LT = 'LT';
    case LV = 'LV';
    case AT = 'AT';
    case BE = 'BE';
    case DE_LU = 'DE-LU';
    case FR = 'FR';
    case NL = 'NL';
    case PL = 'PL';
}
