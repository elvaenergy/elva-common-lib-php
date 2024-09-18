<?php

namespace Elva\Common\Lib\Enums\Tip;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum TipState: string
{
    use Arrayable;

    case DRAFT = 'DRAFT';
    case PUBLISHED = 'PUBLISHED';
}
