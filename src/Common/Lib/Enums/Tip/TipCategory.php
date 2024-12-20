<?php

namespace Elva\Common\Lib\Enums\Tip;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum TipCategory: string
{
    use Arrayable;

    case ONBOARDING = 'ONBOARDING';
    case GENERAL = 'GENERAL';
}
