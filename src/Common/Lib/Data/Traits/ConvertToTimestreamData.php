<?php

namespace Elva\Common\Lib\Data\Traits;

use Elva\Common\Lib\Data\NormalizedDeviceData;
use Elva\Common\Lib\Enums\Asset\NormalizedDeviceData\DataType;
use Elva\Common\Lib\Enums\Asset\NormalizedDeviceData\DataUnit;
use Illuminate\Support\Carbon;
use NorbyBaru\AwsTimestream\Builder\TimestreamPayloadBuilder;
use NorbyBaru\AwsTimestream\Enum\ValueTypeEnum;

trait ConvertToTimestreamData
{
    public static function getTimestreamPayloadValueTypeFromDataType(DataType $dataType): ValueTypeEnum
    {
        return match ($dataType) {
            DataType::BOOLEAN => ValueTypeEnum::BOOLEAN(),
            DataType::FLOAT => ValueTypeEnum::DOUBLE(),
            DataType::INT => ValueTypeEnum::BIGINT(),
            DataType::DATETIME => ValueTypeEnum::TIMESTAMP(),
            default => ValueTypeEnum::VARCHAR(),
        };
    }

    public static function buildPayloadForTimestream(Carbon   $time,
                                                     string   $measureName,
                                                     mixed    $measureValue,
                                                     DataType $measureValueType,
                                                     DataUnit $measureValueUnit,
                                                     array    $commonAttributes = []
    ): TimestreamPayloadBuilder
    {
        $payload = TimestreamPayloadBuilder::make(measureName: $measureName)
            ->setMeasureValue(value: $measureValue);

        // Set value type
        $valueType = NormalizedDeviceData::getTimestreamPayloadValueTypeFromDataType($measureValueType);
        $payload->setTime($time)
            ->setMeasureValueType(type: $valueType)
            ->setDimensions(name: "unit", value: $measureValueUnit->value);

        // Set dimensions
        foreach ($commonAttributes as $name => $value) {
            $payload->setDimensions(name: $name, value: $value);
        }

        return $payload;
    }

    public function toTimestreamPayload(): TimestreamPayloadBuilder
    {
        return self::buildPayloadForTimestream(
            time: $this->timestamp,
            measureName: $this->name,
            measureValue: $this->value,
            measureValueType: $this->type,
            measureValueUnit: $this->unit,
            commonAttributes: $this->attributes
        );
    }
}