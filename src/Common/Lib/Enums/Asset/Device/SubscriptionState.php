<?php

namespace Elva\Common\Lib\Enums\Asset\Device;

enum SubscriptionState: string
{
    case ACTIVE = 'ACTIVE';
    case REVOKED = 'REVOKED';
    case INACTIVE = 'INACTIVE';
    case REQUESTED = 'REQUESTED';
}
