<?php

namespace Elva\Common\Lib\Enums\NordPool;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum NordPoolCurrency: string
{
    use Arrayable;

    case SEK = 'SEK';
    case NOK = 'NOK';
    case DKK = 'DKK';
    case EUR = 'EUR';
    case GBP = 'GBP';
}
