<?php
/**
 * Author: Agustinus P. Wigeberg
 * Date: 2024-09-21
 * Time: 14:07
 * Copyright: Elva Energy AB
 */

namespace Elva\Common\Lib\Helpers\Address;


class AddressParser
{
    public static function parseFullAddress(string $fullAddress): ?array
    {
        $postalCode = null;

        if (preg_match("/(\d{5} )|(\d{3} \d{2} )/", $fullAddress, $matched)) {
            $postalCode = str_replace(" ", "", $matched[0]);
        }

        if (empty($postalCode)) return null;

        $addressParts = explode($matched[0], $fullAddress);

        if (sizeof($addressParts) < 2) return null;

        return [
            'address'     => trim($addressParts[0], ", "),
            'postal_code' => $postalCode,
            'postal_town' => trim(
                str_replace(
                    [" Sverige", " sverige", " Sweden", " sweden", " SE", " se"],
                    "", $addressParts[1]),
                ", ")
        ];
    }
}
