<?php

namespace Elva\Common\Lib\Data;

use Elva\Common\Lib\Data\Traits\ConvertToTimestreamData;
use Elva\Common\Lib\Enums\Asset\NormalizedDeviceData\DataType;
use Elva\Common\Lib\Enums\Asset\NormalizedDeviceData\DataUnit;
use Illuminate\Support\Carbon;

/**
 * Class NormalizedDeviceData
 * @package Elva\Common\Lib\Data
 *
 * @property Carbon $timestamp
 * @property string $name
 * @property object|string|float $value
 * @property DataType $type
 * @property DataUnit|null $unit
 * @property array $attributes
 */
class NormalizedDeviceData
{
    use ConvertToTimestreamData;

    public Carbon $timestamp;
    public string $name;
    public object|string|float|int $value;
    public DataType $type;
    public DataUnit|null $unit;
    public array $attributes;

    public function __construct(Carbon $timestamp,
                                string $name,
                                object|string|float|int $value,
                                DataType $type,
                                DataUnit $unit = null,
                                array $attributes = [])
    {
        $this->timestamp = $timestamp;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->unit = $unit;
        $this->attributes = $attributes;
    }
}