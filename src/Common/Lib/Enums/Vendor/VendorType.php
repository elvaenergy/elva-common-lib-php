<?php

namespace Elva\Common\Lib\Enums\Vendor;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum VendorType: string
{
    use Arrayable;
    
    case MANUFACTURE = 'MANUFACTURE';
    case FINANCE = 'FINANCE';
}
