<?php

namespace Elva\Common\Lib\Helpers\Address;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class CoordinatesConverter
{
    public static function fromWgs84(float $latitude, float $longitude): bool|array
    {
        $lantmaterietServiceUrl = "https://www.lantmateriet.se/api/epi/Transform?type=2&x={$latitude}&y={$longitude}&z=0&id=16461";

        $client = new Client();

        try {
            $response = $client->request('GET', $lantmaterietServiceUrl);

            if ($response->getStatusCode() != 200) return false;

            $responseData = json_decode(json_decode($response->getBody()->getContents()), true);
            $coordinatesFound = Arr::get($responseData, 'responses');

            if ($coordinatesFound && sizeof($coordinatesFound) == 2) {
                foreach ($coordinatesFound as $coordinates) {
                    if ($coordinates['Message'] == 'SWEREF 99 TM') {
                        return [
                            'sweref_99tm_north' => $coordinates['CalculatedX'],
                            'sweref_99tm_east'  => $coordinates['CalculatedY'],
                        ];
                    }
                }
            }
        } catch (Exception $e) {
            Log::error("Caught an exception during requesting {$lantmaterietServiceUrl}: " . $e->getMessage());
        } catch (GuzzleException $e) {
            Log::error("Caught an GuzzleException during requesting {$lantmaterietServiceUrl}: " . $e->getMessage());
        }

        return false;
    }
}
