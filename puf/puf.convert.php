<?php 
/**
 * PUF
 *
 * PHP Utility Framework.
 *
 * @package		PUF
 * @version		1.0
 * @author		Gilbert Pellegrom
 * @license		GPL v2
 * @link		http://puf.dev7studios.com
 */
 
namespace PUF;

class Convert {
    
    /**
     * Convert a 2 digit ISO country code to a country name.
     *
     * @access  public
     * @param   string
     * @return  string
     */
    public function country_name($code)
    {
        $country = '';
        if( $code == 'AF' ) $country = 'Afghanistan';
        if( $code == 'AX' ) $country = 'Aland Islands';
        if( $code == 'AL' ) $country = 'Albania';
        if( $code == 'DZ' ) $country = 'Algeria';
        if( $code == 'AS' ) $country = 'American Samoa';
        if( $code == 'AD' ) $country = 'Andorra';
        if( $code == 'AO' ) $country = 'Angola';
        if( $code == 'AI' ) $country = 'Anguilla';
        if( $code == 'AQ' ) $country = 'Antarctica';
        if( $code == 'AG' ) $country = 'Antigua and Barbuda';
        if( $code == 'AR' ) $country = 'Argentina';
        if( $code == 'AM' ) $country = 'Armenia';
        if( $code == 'AW' ) $country = 'Aruba';
        if( $code == 'AU' ) $country = 'Australia';
        if( $code == 'AT' ) $country = 'Austria';
        if( $code == 'AZ' ) $country = 'Azerbaijan';
        if( $code == 'BS' ) $country = 'Bahamas the';
        if( $code == 'BH' ) $country = 'Bahrain';
        if( $code == 'BD' ) $country = 'Bangladesh';
        if( $code == 'BB' ) $country = 'Barbados';
        if( $code == 'BY' ) $country = 'Belarus';
        if( $code == 'BE' ) $country = 'Belgium';
        if( $code == 'BZ' ) $country = 'Belize';
        if( $code == 'BJ' ) $country = 'Benin';
        if( $code == 'BM' ) $country = 'Bermuda';
        if( $code == 'BT' ) $country = 'Bhutan';
        if( $code == 'BO' ) $country = 'Bolivia';
        if( $code == 'BA' ) $country = 'Bosnia and Herzegovina';
        if( $code == 'BW' ) $country = 'Botswana';
        if( $code == 'BV' ) $country = 'Bouvet Island (Bouvetoya)';
        if( $code == 'BR' ) $country = 'Brazil';
        if( $code == 'IO' ) $country = 'British Indian Ocean Territory (Chagos Archipelago)';
        if( $code == 'VG' ) $country = 'British Virgin Islands';
        if( $code == 'BN' ) $country = 'Brunei Darussalam';
        if( $code == 'BG' ) $country = 'Bulgaria';
        if( $code == 'BF' ) $country = 'Burkina Faso';
        if( $code == 'BI' ) $country = 'Burundi';
        if( $code == 'KH' ) $country = 'Cambodia';
        if( $code == 'CM' ) $country = 'Cameroon';
        if( $code == 'CA' ) $country = 'Canada';
        if( $code == 'CV' ) $country = 'Cape Verde';
        if( $code == 'KY' ) $country = 'Cayman Islands';
        if( $code == 'CF' ) $country = 'Central African Republic';
        if( $code == 'TD' ) $country = 'Chad';
        if( $code == 'CL' ) $country = 'Chile';
        if( $code == 'CN' ) $country = 'China';
        if( $code == 'CX' ) $country = 'Christmas Island';
        if( $code == 'CC' ) $country = 'Cocos (Keeling) Islands';
        if( $code == 'CO' ) $country = 'Colombia';
        if( $code == 'KM' ) $country = 'Comoros the';
        if( $code == 'CD' ) $country = 'Congo';
        if( $code == 'CG' ) $country = 'Congo the';
        if( $code == 'CK' ) $country = 'Cook Islands';
        if( $code == 'CR' ) $country = 'Costa Rica';
        if( $code == 'CI' ) $country = 'Cote d\'Ivoire';
        if( $code == 'HR' ) $country = 'Croatia';
        if( $code == 'CU' ) $country = 'Cuba';
        if( $code == 'CY' ) $country = 'Cyprus';
        if( $code == 'CZ' ) $country = 'Czech Republic';
        if( $code == 'DK' ) $country = 'Denmark';
        if( $code == 'DJ' ) $country = 'Djibouti';
        if( $code == 'DM' ) $country = 'Dominica';
        if( $code == 'DO' ) $country = 'Dominican Republic';
        if( $code == 'EC' ) $country = 'Ecuador';
        if( $code == 'EG' ) $country = 'Egypt';
        if( $code == 'SV' ) $country = 'El Salvador';
        if( $code == 'GQ' ) $country = 'Equatorial Guinea';
        if( $code == 'ER' ) $country = 'Eritrea';
        if( $code == 'EE' ) $country = 'Estonia';
        if( $code == 'ET' ) $country = 'Ethiopia';
        if( $code == 'FO' ) $country = 'Faroe Islands';
        if( $code == 'FK' ) $country = 'Falkland Islands (Malvinas)';
        if( $code == 'FJ' ) $country = 'Fiji the Fiji Islands';
        if( $code == 'FI' ) $country = 'Finland';
        if( $code == 'FR' ) $country = 'France, French Republic';
        if( $code == 'GF' ) $country = 'French Guiana';
        if( $code == 'PF' ) $country = 'French Polynesia';
        if( $code == 'TF' ) $country = 'French Southern Territories';
        if( $code == 'GA' ) $country = 'Gabon';
        if( $code == 'GM' ) $country = 'Gambia the';
        if( $code == 'GE' ) $country = 'Georgia';
        if( $code == 'DE' ) $country = 'Germany';
        if( $code == 'GH' ) $country = 'Ghana';
        if( $code == 'GI' ) $country = 'Gibraltar';
        if( $code == 'GR' ) $country = 'Greece';
        if( $code == 'GL' ) $country = 'Greenland';
        if( $code == 'GD' ) $country = 'Grenada';
        if( $code == 'GP' ) $country = 'Guadeloupe';
        if( $code == 'GU' ) $country = 'Guam';
        if( $code == 'GT' ) $country = 'Guatemala';
        if( $code == 'GG' ) $country = 'Guernsey';
        if( $code == 'GN' ) $country = 'Guinea';
        if( $code == 'GW' ) $country = 'Guinea-Bissau';
        if( $code == 'GY' ) $country = 'Guyana';
        if( $code == 'HT' ) $country = 'Haiti';
        if( $code == 'HM' ) $country = 'Heard Island and McDonald Islands';
        if( $code == 'VA' ) $country = 'Holy See (Vatican City State)';
        if( $code == 'HN' ) $country = 'Honduras';
        if( $code == 'HK' ) $country = 'Hong Kong';
        if( $code == 'HU' ) $country = 'Hungary';
        if( $code == 'IS' ) $country = 'Iceland';
        if( $code == 'IN' ) $country = 'India';
        if( $code == 'ID' ) $country = 'Indonesia';
        if( $code == 'IR' ) $country = 'Iran';
        if( $code == 'IQ' ) $country = 'Iraq';
        if( $code == 'IE' ) $country = 'Ireland';
        if( $code == 'IM' ) $country = 'Isle of Man';
        if( $code == 'IL' ) $country = 'Israel';
        if( $code == 'IT' ) $country = 'Italy';
        if( $code == 'JM' ) $country = 'Jamaica';
        if( $code == 'JP' ) $country = 'Japan';
        if( $code == 'JE' ) $country = 'Jersey';
        if( $code == 'JO' ) $country = 'Jordan';
        if( $code == 'KZ' ) $country = 'Kazakhstan';
        if( $code == 'KE' ) $country = 'Kenya';
        if( $code == 'KI' ) $country = 'Kiribati';
        if( $code == 'KP' ) $country = 'Korea';
        if( $code == 'KR' ) $country = 'Korea';
        if( $code == 'KW' ) $country = 'Kuwait';
        if( $code == 'KG' ) $country = 'Kyrgyz Republic';
        if( $code == 'LA' ) $country = 'Lao';
        if( $code == 'LV' ) $country = 'Latvia';
        if( $code == 'LB' ) $country = 'Lebanon';
        if( $code == 'LS' ) $country = 'Lesotho';
        if( $code == 'LR' ) $country = 'Liberia';
        if( $code == 'LY' ) $country = 'Libyan Arab Jamahiriya';
        if( $code == 'LI' ) $country = 'Liechtenstein';
        if( $code == 'LT' ) $country = 'Lithuania';
        if( $code == 'LU' ) $country = 'Luxembourg';
        if( $code == 'MO' ) $country = 'Macao';
        if( $code == 'MK' ) $country = 'Macedonia';
        if( $code == 'MG' ) $country = 'Madagascar';
        if( $code == 'MW' ) $country = 'Malawi';
        if( $code == 'MY' ) $country = 'Malaysia';
        if( $code == 'MV' ) $country = 'Maldives';
        if( $code == 'ML' ) $country = 'Mali';
        if( $code == 'MT' ) $country = 'Malta';
        if( $code == 'MH' ) $country = 'Marshall Islands';
        if( $code == 'MQ' ) $country = 'Martinique';
        if( $code == 'MR' ) $country = 'Mauritania';
        if( $code == 'MU' ) $country = 'Mauritius';
        if( $code == 'YT' ) $country = 'Mayotte';
        if( $code == 'MX' ) $country = 'Mexico';
        if( $code == 'FM' ) $country = 'Micronesia';
        if( $code == 'MD' ) $country = 'Moldova';
        if( $code == 'MC' ) $country = 'Monaco';
        if( $code == 'MN' ) $country = 'Mongolia';
        if( $code == 'ME' ) $country = 'Montenegro';
        if( $code == 'MS' ) $country = 'Montserrat';
        if( $code == 'MA' ) $country = 'Morocco';
        if( $code == 'MZ' ) $country = 'Mozambique';
        if( $code == 'MM' ) $country = 'Myanmar';
        if( $code == 'NA' ) $country = 'Namibia';
        if( $code == 'NR' ) $country = 'Nauru';
        if( $code == 'NP' ) $country = 'Nepal';
        if( $code == 'AN' ) $country = 'Netherlands Antilles';
        if( $code == 'NL' ) $country = 'Netherlands the';
        if( $code == 'NC' ) $country = 'New Caledonia';
        if( $code == 'NZ' ) $country = 'New Zealand';
        if( $code == 'NI' ) $country = 'Nicaragua';
        if( $code == 'NE' ) $country = 'Niger';
        if( $code == 'NG' ) $country = 'Nigeria';
        if( $code == 'NU' ) $country = 'Niue';
        if( $code == 'NF' ) $country = 'Norfolk Island';
        if( $code == 'MP' ) $country = 'Northern Mariana Islands';
        if( $code == 'NO' ) $country = 'Norway';
        if( $code == 'OM' ) $country = 'Oman';
        if( $code == 'PK' ) $country = 'Pakistan';
        if( $code == 'PW' ) $country = 'Palau';
        if( $code == 'PS' ) $country = 'Palestinian Territory';
        if( $code == 'PA' ) $country = 'Panama';
        if( $code == 'PG' ) $country = 'Papua New Guinea';
        if( $code == 'PY' ) $country = 'Paraguay';
        if( $code == 'PE' ) $country = 'Peru';
        if( $code == 'PH' ) $country = 'Philippines';
        if( $code == 'PN' ) $country = 'Pitcairn Islands';
        if( $code == 'PL' ) $country = 'Poland';
        if( $code == 'PT' ) $country = 'Portugal, Portuguese Republic';
        if( $code == 'PR' ) $country = 'Puerto Rico';
        if( $code == 'QA' ) $country = 'Qatar';
        if( $code == 'RE' ) $country = 'Reunion';
        if( $code == 'RO' ) $country = 'Romania';
        if( $code == 'RU' ) $country = 'Russian Federation';
        if( $code == 'RW' ) $country = 'Rwanda';
        if( $code == 'BL' ) $country = 'Saint Barthelemy';
        if( $code == 'SH' ) $country = 'Saint Helena';
        if( $code == 'KN' ) $country = 'Saint Kitts and Nevis';
        if( $code == 'LC' ) $country = 'Saint Lucia';
        if( $code == 'MF' ) $country = 'Saint Martin';
        if( $code == 'PM' ) $country = 'Saint Pierre and Miquelon';
        if( $code == 'VC' ) $country = 'Saint Vincent and the Grenadines';
        if( $code == 'WS' ) $country = 'Samoa';
        if( $code == 'SM' ) $country = 'San Marino';
        if( $code == 'ST' ) $country = 'Sao Tome and Principe';
        if( $code == 'SA' ) $country = 'Saudi Arabia';
        if( $code == 'SN' ) $country = 'Senegal';
        if( $code == 'RS' ) $country = 'Serbia';
        if( $code == 'SC' ) $country = 'Seychelles';
        if( $code == 'SL' ) $country = 'Sierra Leone';
        if( $code == 'SG' ) $country = 'Singapore';
        if( $code == 'SK' ) $country = 'Slovakia (Slovak Republic)';
        if( $code == 'SI' ) $country = 'Slovenia';
        if( $code == 'SB' ) $country = 'Solomon Islands';
        if( $code == 'SO' ) $country = 'Somalia, Somali Republic';
        if( $code == 'ZA' ) $country = 'South Africa';
        if( $code == 'GS' ) $country = 'South Georgia and the South Sandwich Islands';
        if( $code == 'ES' ) $country = 'Spain';
        if( $code == 'LK' ) $country = 'Sri Lanka';
        if( $code == 'SD' ) $country = 'Sudan';
        if( $code == 'SR' ) $country = 'Suriname';
        if( $code == 'SJ' ) $country = 'Svalbard & Jan Mayen Islands';
        if( $code == 'SZ' ) $country = 'Swaziland';
        if( $code == 'SE' ) $country = 'Sweden';
        if( $code == 'CH' ) $country = 'Switzerland, Swiss Confederation';
        if( $code == 'SY' ) $country = 'Syrian Arab Republic';
        if( $code == 'TW' ) $country = 'Taiwan';
        if( $code == 'TJ' ) $country = 'Tajikistan';
        if( $code == 'TZ' ) $country = 'Tanzania';
        if( $code == 'TH' ) $country = 'Thailand';
        if( $code == 'TL' ) $country = 'Timor-Leste';
        if( $code == 'TG' ) $country = 'Togo';
        if( $code == 'TK' ) $country = 'Tokelau';
        if( $code == 'TO' ) $country = 'Tonga';
        if( $code == 'TT' ) $country = 'Trinidad and Tobago';
        if( $code == 'TN' ) $country = 'Tunisia';
        if( $code == 'TR' ) $country = 'Turkey';
        if( $code == 'TM' ) $country = 'Turkmenistan';
        if( $code == 'TC' ) $country = 'Turks and Caicos Islands';
        if( $code == 'TV' ) $country = 'Tuvalu';
        if( $code == 'UG' ) $country = 'Uganda';
        if( $code == 'UA' ) $country = 'Ukraine';
        if( $code == 'AE' ) $country = 'United Arab Emirates';
        if( $code == 'GB' ) $country = 'United Kingdom';
        if( $code == 'US' ) $country = 'United States of America';
        if( $code == 'UM' ) $country = 'United States Minor Outlying Islands';
        if( $code == 'VI' ) $country = 'United States Virgin Islands';
        if( $code == 'UY' ) $country = 'Uruguay, Eastern Republic of';
        if( $code == 'UZ' ) $country = 'Uzbekistan';
        if( $code == 'VU' ) $country = 'Vanuatu';
        if( $code == 'VE' ) $country = 'Venezuela';
        if( $code == 'VN' ) $country = 'Vietnam';
        if( $code == 'WF' ) $country = 'Wallis and Futuna';
        if( $code == 'EH' ) $country = 'Western Sahara';
        if( $code == 'YE' ) $country = 'Yemen';
        if( $code == 'ZM' ) $country = 'Zambia';
        if( $code == 'ZW' ) $country = 'Zimbabwe';
        if( $country == '') $country = $code;
        return $country;
    }
    
    /**
     * Convert a 2 digit ISO country code to a continent.
     *
     * @access  public
     * @param   string
     * @return  string
     */
    public function country_to_continent($country){
        $continent = '';
        if( $country == 'AF' ) $continent = 'Asia';
        if( $country == 'AX' ) $continent = 'Europe';
        if( $country == 'AL' ) $continent = 'Europe';
        if( $country == 'DZ' ) $continent = 'Africa';
        if( $country == 'AS' ) $continent = 'Oceania';
        if( $country == 'AD' ) $continent = 'Europe';
        if( $country == 'AO' ) $continent = 'Africa';
        if( $country == 'AI' ) $continent = 'North America';
        if( $country == 'AQ' ) $continent = 'Antarctica';
        if( $country == 'AG' ) $continent = 'North America';
        if( $country == 'AR' ) $continent = 'South America';
        if( $country == 'AM' ) $continent = 'Asia';
        if( $country == 'AW' ) $continent = 'North America';
        if( $country == 'AU' ) $continent = 'Oceania';
        if( $country == 'AT' ) $continent = 'Europe';
        if( $country == 'AZ' ) $continent = 'Asia';
        if( $country == 'BS' ) $continent = 'North America';
        if( $country == 'BH' ) $continent = 'Asia';
        if( $country == 'BD' ) $continent = 'Asia';
        if( $country == 'BB' ) $continent = 'North America';
        if( $country == 'BY' ) $continent = 'Europe';
        if( $country == 'BE' ) $continent = 'Europe';
        if( $country == 'BZ' ) $continent = 'North America';
        if( $country == 'BJ' ) $continent = 'Africa';
        if( $country == 'BM' ) $continent = 'North America';
        if( $country == 'BT' ) $continent = 'Asia';
        if( $country == 'BO' ) $continent = 'South America';
        if( $country == 'BA' ) $continent = 'Europe';
        if( $country == 'BW' ) $continent = 'Africa';
        if( $country == 'BV' ) $continent = 'Antarctica';
        if( $country == 'BR' ) $continent = 'South America';
        if( $country == 'IO' ) $continent = 'Asia';
        if( $country == 'VG' ) $continent = 'North America';
        if( $country == 'BN' ) $continent = 'Asia';
        if( $country == 'BG' ) $continent = 'Europe';
        if( $country == 'BF' ) $continent = 'Africa';
        if( $country == 'BI' ) $continent = 'Africa';
        if( $country == 'KH' ) $continent = 'Asia';
        if( $country == 'CM' ) $continent = 'Africa';
        if( $country == 'CA' ) $continent = 'North America';
        if( $country == 'CV' ) $continent = 'Africa';
        if( $country == 'KY' ) $continent = 'North America';
        if( $country == 'CF' ) $continent = 'Africa';
        if( $country == 'TD' ) $continent = 'Africa';
        if( $country == 'CL' ) $continent = 'South America';
        if( $country == 'CN' ) $continent = 'Asia';
        if( $country == 'CX' ) $continent = 'Asia';
        if( $country == 'CC' ) $continent = 'Asia';
        if( $country == 'CO' ) $continent = 'South America';
        if( $country == 'KM' ) $continent = 'Africa';
        if( $country == 'CD' ) $continent = 'Africa';
        if( $country == 'CG' ) $continent = 'Africa';
        if( $country == 'CK' ) $continent = 'Oceania';
        if( $country == 'CR' ) $continent = 'North America';
        if( $country == 'CI' ) $continent = 'Africa';
        if( $country == 'HR' ) $continent = 'Europe';
        if( $country == 'CU' ) $continent = 'North America';
        if( $country == 'CY' ) $continent = 'Asia';
        if( $country == 'CZ' ) $continent = 'Europe';
        if( $country == 'DK' ) $continent = 'Europe';
        if( $country == 'DJ' ) $continent = 'Africa';
        if( $country == 'DM' ) $continent = 'North America';
        if( $country == 'DO' ) $continent = 'North America';
        if( $country == 'EC' ) $continent = 'South America';
        if( $country == 'EG' ) $continent = 'Africa';
        if( $country == 'SV' ) $continent = 'North America';
        if( $country == 'GQ' ) $continent = 'Africa';
        if( $country == 'ER' ) $continent = 'Africa';
        if( $country == 'EE' ) $continent = 'Europe';
        if( $country == 'ET' ) $continent = 'Africa';
        if( $country == 'FO' ) $continent = 'Europe';
        if( $country == 'FK' ) $continent = 'South America';
        if( $country == 'FJ' ) $continent = 'Oceania';
        if( $country == 'FI' ) $continent = 'Europe';
        if( $country == 'FR' ) $continent = 'Europe';
        if( $country == 'GF' ) $continent = 'South America';
        if( $country == 'PF' ) $continent = 'Oceania';
        if( $country == 'TF' ) $continent = 'Antarctica';
        if( $country == 'GA' ) $continent = 'Africa';
        if( $country == 'GM' ) $continent = 'Africa';
        if( $country == 'GE' ) $continent = 'Asia';
        if( $country == 'DE' ) $continent = 'Europe';
        if( $country == 'GH' ) $continent = 'Africa';
        if( $country == 'GI' ) $continent = 'Europe';
        if( $country == 'GR' ) $continent = 'Europe';
        if( $country == 'GL' ) $continent = 'North America';
        if( $country == 'GD' ) $continent = 'North America';
        if( $country == 'GP' ) $continent = 'North America';
        if( $country == 'GU' ) $continent = 'Oceania';
        if( $country == 'GT' ) $continent = 'North America';
        if( $country == 'GG' ) $continent = 'Europe';
        if( $country == 'GN' ) $continent = 'Africa';
        if( $country == 'GW' ) $continent = 'Africa';
        if( $country == 'GY' ) $continent = 'South America';
        if( $country == 'HT' ) $continent = 'North America';
        if( $country == 'HM' ) $continent = 'Antarctica';
        if( $country == 'VA' ) $continent = 'Europe';
        if( $country == 'HN' ) $continent = 'North America';
        if( $country == 'HK' ) $continent = 'Asia';
        if( $country == 'HU' ) $continent = 'Europe';
        if( $country == 'IS' ) $continent = 'Europe';
        if( $country == 'IN' ) $continent = 'Asia';
        if( $country == 'ID' ) $continent = 'Asia';
        if( $country == 'IR' ) $continent = 'Asia';
        if( $country == 'IQ' ) $continent = 'Asia';
        if( $country == 'IE' ) $continent = 'Europe';
        if( $country == 'IM' ) $continent = 'Europe';
        if( $country == 'IL' ) $continent = 'Asia';
        if( $country == 'IT' ) $continent = 'Europe';
        if( $country == 'JM' ) $continent = 'North America';
        if( $country == 'JP' ) $continent = 'Asia';
        if( $country == 'JE' ) $continent = 'Europe';
        if( $country == 'JO' ) $continent = 'Asia';
        if( $country == 'KZ' ) $continent = 'Asia';
        if( $country == 'KE' ) $continent = 'Africa';
        if( $country == 'KI' ) $continent = 'Oceania';
        if( $country == 'KP' ) $continent = 'Asia';
        if( $country == 'KR' ) $continent = 'Asia';
        if( $country == 'KW' ) $continent = 'Asia';
        if( $country == 'KG' ) $continent = 'Asia';
        if( $country == 'LA' ) $continent = 'Asia';
        if( $country == 'LV' ) $continent = 'Europe';
        if( $country == 'LB' ) $continent = 'Asia';
        if( $country == 'LS' ) $continent = 'Africa';
        if( $country == 'LR' ) $continent = 'Africa';
        if( $country == 'LY' ) $continent = 'Africa';
        if( $country == 'LI' ) $continent = 'Europe';
        if( $country == 'LT' ) $continent = 'Europe';
        if( $country == 'LU' ) $continent = 'Europe';
        if( $country == 'MO' ) $continent = 'Asia';
        if( $country == 'MK' ) $continent = 'Europe';
        if( $country == 'MG' ) $continent = 'Africa';
        if( $country == 'MW' ) $continent = 'Africa';
        if( $country == 'MY' ) $continent = 'Asia';
        if( $country == 'MV' ) $continent = 'Asia';
        if( $country == 'ML' ) $continent = 'Africa';
        if( $country == 'MT' ) $continent = 'Europe';
        if( $country == 'MH' ) $continent = 'Oceania';
        if( $country == 'MQ' ) $continent = 'North America';
        if( $country == 'MR' ) $continent = 'Africa';
        if( $country == 'MU' ) $continent = 'Africa';
        if( $country == 'YT' ) $continent = 'Africa';
        if( $country == 'MX' ) $continent = 'North America';
        if( $country == 'FM' ) $continent = 'Oceania';
        if( $country == 'MD' ) $continent = 'Europe';
        if( $country == 'MC' ) $continent = 'Europe';
        if( $country == 'MN' ) $continent = 'Asia';
        if( $country == 'ME' ) $continent = 'Europe';
        if( $country == 'MS' ) $continent = 'North America';
        if( $country == 'MA' ) $continent = 'Africa';
        if( $country == 'MZ' ) $continent = 'Africa';
        if( $country == 'MM' ) $continent = 'Asia';
        if( $country == 'NA' ) $continent = 'Africa';
        if( $country == 'NR' ) $continent = 'Oceania';
        if( $country == 'NP' ) $continent = 'Asia';
        if( $country == 'AN' ) $continent = 'North America';
        if( $country == 'NL' ) $continent = 'Europe';
        if( $country == 'NC' ) $continent = 'Oceania';
        if( $country == 'NZ' ) $continent = 'Oceania';
        if( $country == 'NI' ) $continent = 'North America';
        if( $country == 'NE' ) $continent = 'Africa';
        if( $country == 'NG' ) $continent = 'Africa';
        if( $country == 'NU' ) $continent = 'Oceania';
        if( $country == 'NF' ) $continent = 'Oceania';
        if( $country == 'MP' ) $continent = 'Oceania';
        if( $country == 'NO' ) $continent = 'Europe';
        if( $country == 'OM' ) $continent = 'Asia';
        if( $country == 'PK' ) $continent = 'Asia';
        if( $country == 'PW' ) $continent = 'Oceania';
        if( $country == 'PS' ) $continent = 'Asia';
        if( $country == 'PA' ) $continent = 'North America';
        if( $country == 'PG' ) $continent = 'Oceania';
        if( $country == 'PY' ) $continent = 'South America';
        if( $country == 'PE' ) $continent = 'South America';
        if( $country == 'PH' ) $continent = 'Asia';
        if( $country == 'PN' ) $continent = 'Oceania';
        if( $country == 'PL' ) $continent = 'Europe';
        if( $country == 'PT' ) $continent = 'Europe';
        if( $country == 'PR' ) $continent = 'North America';
        if( $country == 'QA' ) $continent = 'Asia';
        if( $country == 'RE' ) $continent = 'Africa';
        if( $country == 'RO' ) $continent = 'Europe';
        if( $country == 'RU' ) $continent = 'Europe';
        if( $country == 'RW' ) $continent = 'Africa';
        if( $country == 'BL' ) $continent = 'North America';
        if( $country == 'SH' ) $continent = 'Africa';
        if( $country == 'KN' ) $continent = 'North America';
        if( $country == 'LC' ) $continent = 'North America';
        if( $country == 'MF' ) $continent = 'North America';
        if( $country == 'PM' ) $continent = 'North America';
        if( $country == 'VC' ) $continent = 'North America';
        if( $country == 'WS' ) $continent = 'Oceania';
        if( $country == 'SM' ) $continent = 'Europe';
        if( $country == 'ST' ) $continent = 'Africa';
        if( $country == 'SA' ) $continent = 'Asia';
        if( $country == 'SN' ) $continent = 'Africa';
        if( $country == 'RS' ) $continent = 'Europe';
        if( $country == 'SC' ) $continent = 'Africa';
        if( $country == 'SL' ) $continent = 'Africa';
        if( $country == 'SG' ) $continent = 'Asia';
        if( $country == 'SK' ) $continent = 'Europe';
        if( $country == 'SI' ) $continent = 'Europe';
        if( $country == 'SB' ) $continent = 'Oceania';
        if( $country == 'SO' ) $continent = 'Africa';
        if( $country == 'ZA' ) $continent = 'Africa';
        if( $country == 'GS' ) $continent = 'Antarctica';
        if( $country == 'ES' ) $continent = 'Europe';
        if( $country == 'LK' ) $continent = 'Asia';
        if( $country == 'SD' ) $continent = 'Africa';
        if( $country == 'SR' ) $continent = 'South America';
        if( $country == 'SJ' ) $continent = 'Europe';
        if( $country == 'SZ' ) $continent = 'Africa';
        if( $country == 'SE' ) $continent = 'Europe';
        if( $country == 'CH' ) $continent = 'Europe';
        if( $country == 'SY' ) $continent = 'Asia';
        if( $country == 'TW' ) $continent = 'Asia';
        if( $country == 'TJ' ) $continent = 'Asia';
        if( $country == 'TZ' ) $continent = 'Africa';
        if( $country == 'TH' ) $continent = 'Asia';
        if( $country == 'TL' ) $continent = 'Asia';
        if( $country == 'TG' ) $continent = 'Africa';
        if( $country == 'TK' ) $continent = 'Oceania';
        if( $country == 'TO' ) $continent = 'Oceania';
        if( $country == 'TT' ) $continent = 'North America';
        if( $country == 'TN' ) $continent = 'Africa';
        if( $country == 'TR' ) $continent = 'Asia';
        if( $country == 'TM' ) $continent = 'Asia';
        if( $country == 'TC' ) $continent = 'North America';
        if( $country == 'TV' ) $continent = 'Oceania';
        if( $country == 'UG' ) $continent = 'Africa';
        if( $country == 'UA' ) $continent = 'Europe';
        if( $country == 'AE' ) $continent = 'Asia';
        if( $country == 'GB' ) $continent = 'Europe';
        if( $country == 'US' ) $continent = 'North America';
        if( $country == 'UM' ) $continent = 'Oceania';
        if( $country == 'VI' ) $continent = 'North America';
        if( $country == 'UY' ) $continent = 'South America';
        if( $country == 'UZ' ) $continent = 'Asia';
        if( $country == 'VU' ) $continent = 'Oceania';
        if( $country == 'VE' ) $continent = 'South America';
        if( $country == 'VN' ) $continent = 'Asia';
        if( $country == 'WF' ) $continent = 'Oceania';
        if( $country == 'EH' ) $continent = 'Africa';
        if( $country == 'YE' ) $continent = 'Asia';
        if( $country == 'ZM' ) $continent = 'Africa';
        if( $country == 'ZW' ) $continent = 'Africa';
        return $continent;
    }
    
    /**
     * Convert Http status code to description.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/functions.php
     *
     * @access  public
     * @param   int
     * @return  string
     */
    public function http_status_desc($code) 
    {
        $code = absint($code);

        $code_to_desc = array(
            100 => 'Continue',
            101 => 'Switching Protocols',
            102 => 'Processing',

            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            207 => 'Multi-Status',
            226 => 'IM Used',

            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            305 => 'Use Proxy',
            306 => 'Reserved',
            307 => 'Temporary Redirect',

            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Request Entity Too Large',
            414 => 'Request-URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Requested Range Not Satisfiable',
            417 => 'Expectation Failed',
            422 => 'Unprocessable Entity',
            423 => 'Locked',
            424 => 'Failed Dependency',
            426 => 'Upgrade Required',

            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            506 => 'Variant Also Negotiates',
            507 => 'Insufficient Storage',
            510 => 'Not Extended'
        );

        if ( isset( $code_to_desc[$code] ) )
            return $code_to_desc[$code];
        else
            return '';
    }
    
    /**
     * Convert a file extension to a file type.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/functions.php
     *
     * @access  public
     * @param   string
     * @return  string
     */
    public function file_ext_type($ext) 
    {
        $ext2type = array(
            'audio'       => array( 'aac', 'ac3',  'aif',  'aiff', 'm3a',  'm4a',   'm4b', 'mka', 'mp1', 'mp2',  'mp3', 'ogg', 'oga', 'ram', 'wav', 'wma' ),
            'video'       => array( 'asf', 'avi',  'divx', 'dv',   'flv',  'm4v',   'mkv', 'mov', 'mp4', 'mpeg', 'mpg', 'mpv', 'ogm', 'ogv', 'qt',  'rm', 'vob', 'wmv' ),
            'document'    => array( 'doc', 'docx', 'docm', 'dotm', 'odt',  'pages', 'pdf', 'rtf', 'wp',  'wpd' ),
            'spreadsheet' => array( 'numbers',     'ods',  'xls',  'xlsx', 'xlsb',  'xlsm' ),
            'interactive' => array( 'key', 'ppt',  'pptx', 'pptm', 'odp',  'swf' ),
            'text'        => array( 'asc', 'csv',  'tsv',  'txt' ),
            'archive'     => array( 'bz2', 'cab',  'dmg',  'gz',   'rar',  'sea',   'sit', 'sqx', 'tar', 'tgz',  'zip' ),
            'code'        => array( 'css', 'htm',  'html', 'php',  'js' ),
        );
        foreach ( $ext2type as $type => $exts )
            if ( in_array( $ext, $exts ) )
                return $type;
    }
    
}

?>