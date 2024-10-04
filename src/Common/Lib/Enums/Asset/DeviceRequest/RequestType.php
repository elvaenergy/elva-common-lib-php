<?php

namespace Elva\Common\Lib\Enums\Asset\DeviceRequest;

enum RequestType: string
{
    case READ_SNAPSHOT_DATA = 'READ_SNAPSHOT_DATA';
    case SET_ROOM_INFLUENCE = 'SET_ROOM_INFLUENCE';
    case SET_TEMPERATURE_OFFSET = 'SET_TEMPERATURE_OFFSET';
    case SET_TARGET_ROOM_TEMPERATURE = 'SET_TARGET_ROOM_TEMPERATURE';
}
