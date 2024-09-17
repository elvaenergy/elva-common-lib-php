<?php

namespace Elva\Common\Lib\Enums\Address;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum AddressType: string
{
    use Arrayable;

    case MAILING = 'MAILING';
    case VISITING = 'VISITING';
    case DELIVERY = 'DELIVERY';
    case INVOICING = 'INVOICING';
    case WAREHOUSE = 'WAREHOUSE';
}
