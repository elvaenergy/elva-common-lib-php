<?php

namespace Elva\Common\Lib\Enums\Asset\NormalizedDeviceData;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum DataType: string
{
    use Arrayable;

    case INT = 'int';
    case STRING = 'string';
    case BOOLEAN = 'boolean';
    case DATETIME = 'datetime';
    case FLOAT = 'float';
    case ARRAY = 'array';
}
