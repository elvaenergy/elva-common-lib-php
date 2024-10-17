<?php

namespace Elva\Common\Lib\Interfaces\Asset\DeviceData;

interface ManufacturerDeviceDataNormalizer
{
    public static function getNormalizedParameterFrom(string $manufacturerParameter): ?array;
    public static function normalize(array $manufacturerData, string $dataFormat) : ?array;
}