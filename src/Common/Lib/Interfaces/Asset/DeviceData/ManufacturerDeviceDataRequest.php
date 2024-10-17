<?php

namespace Elva\Common\Lib\Interfaces\Asset\DeviceData;

use Illuminate\Http\JsonResponse;
use Elva\Common\Lib\Enums\Asset\DeviceRequest\RequestType;

interface ManufacturerDeviceDataRequest
{
    /**
     * @param array $targetDeviceIds
     * @param RequestType $requestType
     * @param array $requestData
     * @return array<JsonResponse>
     */
    public static function execute(
        array       $targetDeviceIds,
        RequestType $requestType,
        array       $requestData = []): array;
}