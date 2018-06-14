<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        DHLDataConfig.php
 * Project:     DHL API
 *
 * @author      Philippe Lam
 * @version     0.1
 */

namespace DHL\Datatype;

/**
 * Class DHLDataConfig
 * Manage the configuration from DHL
 * @package DHL\Datatype
 */
class DHLDataConfig
{
    const AR_POST_CODE_FORMAT = array(
        'AD' => ['99999', 'AA999'],
        'AM' => ['9999'],
        'AR' => ['9999'],
        'AS' => ['99999'],
        'AT' => ['9999'],
        'AU' => ['9999'],
        'AZ' => ['999999', '9999'],
        'BA' => ['99999'],
        'BD' => ['9999'],
        'BE' => ['9999'],
        'BG' => ['9999'],
        'BN' => ['AA9999'],
        'BR' => ['99999', '99999-999', '99999999'],
        'BY' => ['999999'],
        'CA' => ['A9A 9A', 'A9A 9A9'],
        'CH' => ['9999'],
        'CN' => ['999999'],
        'CO' => ['999999'],
        'CU' => ['99999'],
        'CY' => ['9999'],
        'CZ' => ['999 99'],
        'DE' => ['99999'],
        'DK' => ['9999'],
        'DZ' => ['99999'],
        'EC' => ['999999'],
        'EE' => ['99999'],
        'ES' => ['99999'],
        'FI' => ['99999'],
        'FM' => ['99999'],
        'FO' => ['999'],
        'FR' => ['99999'],
        'GB' => ['AA9A 9AA', 'A99 9AA', 'A9A 9AA', 'A9 9AA', 'AA99 9AA', 'AA9 9AA'],
        'GE' => ['9999'],
        'GF' => ['99999'],
        'GG' => ['AA99 9AA', 'AA9 9AA'],
        'GL' => ['9999'],
        'GP' => ['99999'],
        'GR' => ['999 99'],
        'GU' => ['99999', '99999-9999'],
        'HR' => ['99999'],
        'HU' => ['9999'],
        'IC' => ['99999'],
        'ID' => ['99999'],
        'IL' => ['99999', '9999999'],
        'IN' => ['999999'],
        'IS' => ['999'],
        'IT' => ['99999'],
        'JE' => ['AA9 9AA'],
        'JP' => ['999-9999'],
        'KG' => ['999999', '99999'],
        'KR' => ['99999'],
        'KV' => ['99999'],
        'KZ' => ['999999'],
        'LI' => ['9999'],
        'LT' => ['99999'],
        'LU' => ['9999'],
        'LV' => ['9999'],
        'MA' => ['99999'],
        'MC' => ['99999'],
        'MD' => ['9999'],
        'ME' => ['99999'],
        'MG' => ['999'],
        'MH' => ['99999'],
        'MK' => ['9999'],
        'MN' => ['999999', '99999'],
        'MP' => ['99999'],
        'MQ' => ['99999'],
        'MV' => ['99999', '9999'],
        'MX' => ['99999'],
        'MY' => ['99999'],
        'NC' => ['99999'],
        'NL' => ['9999', '9999 AA'],
        'NO' => ['9999'],
        'NZ' => ['9999'],
        'PG' => ['999'],
        'PH' => ['9999'],
        'PK' => ['99999'],
        'PL' => ['99-999'],
        'PR' => ['99999'],
        'PT' => ['9999','9999-999'],
        'PW' => ['99999'],
        'RE' => ['99999'],
        'RO' => ['999999'],
        'RS' => ['99999'],
        'RU' => ['999999'],
        'SE' => ['999 99'],
        'SG' => ['999999'],
        'SH' => ['AAAA 9AA'],
        'SI' => ['9999'],
        'SK' => ['999 99'],
        'SM' => ['99999'],
        'SZ' => ['A999'],
        'TH' => ['99999'],
        'TN' => ['9999'],
        'TR' => ['99999'],
        'TW' => ['999', '99999'],
        'UA' => ['99999'],
        'US' => ['99999', '99999-9999'],
        'UZ' => ['999999'],
        'VI' => ['99999'],
        'XY' => ['99999'],
        'YT' => ['99999'],
        'ZA' => ['9999'],
        'AE' => ['Empty'],
        'AF' => ['Empty'],
        'AG' => ['Empty'],
        'AI' => ['Empty'],
        'AL' => ['Empty'],
        'AN' => ['Empty'],
        'AO' => ['Empty'],
        'AW' => ['Empty'],
        'BB' => ['Empty'],
        'BF' => ['Empty'],
        'BH' => ['Empty'],
        'BI' => ['Empty'],
        'BJ' => ['Empty'],
        'BM' => ['Empty'],
        'BO' => ['Empty'],
        'BS' => ['Empty'],
        'BT' => ['Empty'],
        'BW' => ['Empty'],
        'BZ' => ['Empty'],
        'CD' => ['Empty'],
        'CF' => ['Empty'],
        'CG' => ['Empty'],
        'CI' => ['Empty'],
        'CK' => ['Empty'],
        'CL' => ['Empty'],
        'CM' => ['Empty'],
        'CR' => ['Empty'],
        'CV' => ['Empty'],
        'DJ' => ['Empty'],
        'DM' => ['Empty'],
        'DO' => ['Empty'],
        'EG' => ['Empty'],
        'ER' => ['Empty'],
        'ET' => ['Empty'],
        'FJ' => ['Empty'],
        'FK' => ['Empty'],
        'GA' => ['Empty'],
        'GD' => ['Empty'],
        'GH' => ['Empty'],
        'GI' => ['Empty'],
        'GM' => ['Empty'],
        'GN' => ['Empty'],
        'GQ' => ['Empty'],
        'GT' => ['Empty'],
        'GW' => ['Empty'],
        'GY' => ['Empty'],
        'HK' => ['Empty'],
        'HN' => ['Empty'],
        'HT' => ['Empty'],
        'IE' => ['Empty'],
        'IQ' => ['Empty'],
        'IR' => ['Empty'],
        'JM' => ['Empty'],
        'JO' => ['Empty'],
        'KE' => ['Empty'],
        'KI' => ['Empty'],
        'KM' => ['Empty'],
        'KN' => ['Empty'],
        'KP' => ['Empty'],
        'KW' => ['Empty'],
        'KY' => ['Empty'],
        'LA' => ['Empty'],
        'LB' => ['Empty'],
        'LC' => ['Empty'],
        'LK' => ['Empty'],
        'LR' => ['Empty'],
        'LS' => ['Empty'],
        'LY' => ['Empty'],
        'ML' => ['Empty'],
        'MM' => ['Empty'],
        'MO' => ['Empty'],
        'MR' => ['Empty'],
        'MS' => ['Empty'],
        'MT' => ['Empty'],
        'MU' => ['Empty'],
        'MW' => ['Empty'],
        'MZ' => ['Empty'],
        'NA' => ['Empty'],
        'NE' => ['Empty'],
        'NG' => ['Empty'],
        'NI' => ['Empty'],
        'NP' => ['Empty'],
        'NR' => ['Empty'],
        'NU' => ['Empty'],
        'OM' => ['Empty'],
        'PA' => ['Empty'],
        'PE' => ['Empty'],
        'PF' => ['Empty'],
        'PY' => ['Empty'],
        'QA' => ['Empty'],
        'RW' => ['Empty'],
        'SA' => ['Empty'],
        'SB' => ['Empty'],
        'SC' => ['Empty'],
        'SD' => ['Empty'],
        'SL' => ['Empty'],
        'SN' => ['Empty'],
        'SO' => ['Empty'],
        'SR' => ['Empty'],
        'SS' => ['Empty'],
        'ST' => ['Empty'],
        'SV' => ['Empty'],
        'SY' => ['Empty'],
        'TC' => ['Empty'],
        'TD' => ['Empty'],
        'TG' => ['Empty'],
        'TL' => ['Empty'],
        'TO' => ['Empty'],
        'TT' => ['Empty'],
        'TV' => ['Empty'],
        'TZ' => ['Empty'],
        'UG' => ['Empty'],
        'UY' => ['Empty'],
        'VC' => ['Empty'],
        'VE' => ['Empty'],
        'VG' => ['Empty'],
        'VN' => ['Empty'],
        'VU' => ['Empty'],
        'WS' => ['Empty'],
        'XA' => ['Empty'],
        'XB' => ['Empty'],
        'XC' => ['Empty'],
        'XE' => ['Empty'],
        'XL' => ['Empty'],
        'XM' => ['Empty'],
        'XN' => ['Empty'],
        'XS' => ['Empty'],
        'YE' => ['Empty'],
        'ZM' => ['Empty'],
        'ZW' => ['Empty'],
    );

    /**
     * Return a list of the post code format allow for the country iso code
     * @param String $iso_code_country
     * @return Array
     */
    static public function getPostCodeFormatByCountryCode($iso_code_country) {
        if (!key_exists($iso_code_country, self::AR_POST_CODE_FORMAT)) return null;

        return self::AR_POST_CODE_FORMAT[$iso_code_country];
    }
}
