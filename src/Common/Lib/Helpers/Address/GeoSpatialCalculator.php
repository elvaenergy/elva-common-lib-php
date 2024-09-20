<?php

namespace Elva\Common\Lib\Helpers\Address;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeoSpatialCalculator
{
    public static function distanceKm($latA, $lngA, $latB, $lngB): float|int
    {
        // convert from degrees to radians
        $latA = deg2rad($latA); $lngA = deg2rad($lngA);
        $latB = deg2rad($latB); $lngB = deg2rad($lngB);

        // calculate absolute difference for latitude and longitude
        $dLat = ($latA - $latB);
        $dLon = ($lngA - $lngB);

        // do trigonometry magic
        $d =
            sin($dLat/2) * sin($dLat/2) +
            cos($latA) * cos($latB) * sin($dLon/2) *sin($dLon/2);
        $d = 2 * asin(sqrt($d));
        return $d * 6371;
    }

    public static function drivingDistanceKm(string $origin, string $destination): ?float
    {
        $googleMapUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" .
            $origin . "&destinations=" . $destination . "&key=" . config('geocoder.key');

        try {
            $response = Http::post($googleMapUrl);

            if ($response->status() == 200) {
                $distanceData = $response->json();

                if (!empty($distanceData) && !empty($distanceData['rows']) && sizeof($distanceData['rows']) > 0 &&
                    !empty($distanceData['rows'][0]['elements']) && sizeof($distanceData['rows'][0]['elements']) > 0 &&
                    isset($distanceData['rows'][0]['elements'][0]['distance'])) {

                    return $distanceData['rows'][0]['elements'][0]['distance']['value'] / 1000.0;
                }

            } else {
                Log::error($response->body());
                return null;
            }
        } catch (HttpResponseException $e) {
            Log::error($e->getResponse()->getContent());
        }

        return null;
    }
}
