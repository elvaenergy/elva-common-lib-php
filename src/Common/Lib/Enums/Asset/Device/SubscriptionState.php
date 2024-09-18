<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum SubscriptionState: string
{
    use Arrayable;

    case ACTIVE = 'ACTIVE';
    case REVOKED = 'REVOKED';
    case INACTIVE = 'INACTIVE';
    case REQUESTED = 'REQUESTED';
}
