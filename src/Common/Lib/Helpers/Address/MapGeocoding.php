<?php

namespace Elva\Common\Lib\Helpers\Address;

use GuzzleHttp\Client;
use Spatie\Geocoder\Geocoder;

class MapGeocoding
{
    const float ONE_MILE_TO_KM = 1.609344;

    public static function geocodeInfo(string $address): array
    {
        $geocoder = new Geocoder(new Client);
        $geocoder->setApiKey(config('geocoder.key'));
        $geocoder->setRegion(config('geocoder.region', 'se'));

        return $geocoder->getCoordinatesForAddress($address);
    }

    public static function parseGeocodeInfoToArray(array $geocodeInfo = []): array
    {
        if (empty($geocodeInfo)) {
            return [];
        }

        $addressInfo = [
            'street_no'   => null,
            'route'       => null,
            'postal_code' => null,
            'postal_town' => null,
            'province'    => null,
            'country'     => null,
        ];

        if (!empty($geocodeInfo['address_components'])) {
            foreach ($geocodeInfo['address_components'] as $component) {
                if (!$component->types) {
                    continue;
                }

                switch ($component->types[0]) {
                    case 'street_number':
                    case 'premise':
                        $addressInfo['street_no'] = $component->long_name;
                        break;
                    case 'route':
                    case 'locality':
                        $addressInfo['route'] = $component->long_name;
                        break;
                    case 'postal_code':
                        $addressInfo['postal_code'] = str_replace(" ", "", $component->long_name);
                        break;
                    case 'postal_town':
                        $addressInfo['postal_town'] = $component->long_name;
                        break;
                    case 'administrative_area_level_1':
                        $addressInfo['province'] = $component->long_name;
                        break;
                    case 'country':
                        $addressInfo['country'] = $component->long_name;
                        break;
                }
            }
        }

        return $addressInfo;
    }
}
