<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->delete();
        // $country = Country::delete();

        $countries = array(

            // Records 01-99 (Afghanistan to India)

            array('iso' => 'AF', 'name' => 'Afghanistan', 'phonecode' => '93'),
            array('iso' => 'AL', 'name' => 'Albania', 'phonecode' => '355'),
            array('iso' => 'DZ', 'name' => 'Algeria', 'phonecode' => '213'),
            array('iso' => 'AS', 'name' => 'American Samoa', 'phonecode' => '1684'),
            array('iso' => 'AD', 'name' => 'Andorra', 'phonecode' => '376'),
            array('iso' => 'AO', 'name' => 'Angola', 'phonecode' => '244'),
            array('iso' => 'AI', 'name' => 'Anguilla', 'phonecode' => '1264'),
            array('iso' => 'AQ', 'name' => 'Antarctica', 'phonecode' => '0'),
            array('iso' => 'AG', 'name' => 'Antigua and Barbuda', 'phonecode' => '1268'),
            array('iso' => 'AR', 'name' => 'Argentina', 'phonecode' => '54'),
            array('iso' => 'AM', 'name' => 'Armenia', 'phonecode' => '374'),
            array('iso' => 'AW', 'name' => 'Aruba', 'phonecode' => '297'),
            array('iso' => 'AU', 'name' => 'Australia', 'phonecode' => '61'),
            array('iso' => 'AT', 'name' => 'Austria', 'phonecode' => '43'),
            array('iso' => 'AZ', 'name' => 'Azerbaijan', 'phonecode' => '994'),
            array('iso' => 'BS', 'name' => 'Bahamas', 'phonecode' => '1242'),
            array('iso' => 'BH', 'name' => 'Bahrain', 'phonecode' => '973'),
            array('iso' => 'BD', 'name' => 'Bangladesh', 'phonecode' => '880'),
            array('iso' => 'BB', 'name' => 'Barbados', 'phonecode' => '1246'),
            array('iso' => 'BY', 'name' => 'Belarus',  'phonecode' => '375'),
            array('iso' => 'BE', 'name' => 'Belgium', 'phonecode' => '32'),
            array('iso' => 'BZ', 'name' => 'Belize', 'phonecode' => '501'),
            array('iso' => 'BJ', 'name' => 'Benin', 'phonecode' => '229'),
            array('iso' => 'BM', 'name' => 'Bermuda',  'phonecode' => '1441'),
            array('iso' => 'BT', 'name' => 'Bhutan',  'phonecode' => '975'),
            array('iso' => 'BO', 'name' => 'Bolivia',  'phonecode' => '591'),
            array('iso' => 'BA', 'name' => 'Bosnia and Herzegovina',  'phonecode' => '387'),
            array('iso' => 'BW', 'name' => 'Botswana',  'phonecode' => '267'),
            array('iso' => 'BV', 'name' => 'Bouvet Island',  'phonecode' => '0'),
            array('iso' => 'BR', 'name' => 'Brazil',  'phonecode' => '55'),
            array('iso' => 'IO', 'name' => 'British Indian Ocean Territory', 'phonecode' => '246'),
            array('iso' => 'BN', 'name' => 'Brunei Darussalam',  'phonecode' => '673'),
            array('iso' => 'BG', 'name' => 'Bulgaria',  'phonecode' => '359'),
            array('iso' => 'BF', 'name' => 'Burkina Faso',  'phonecode' => '226'),
            array('iso' => 'BI', 'name' => 'Burundi',  'phonecode' => '257'),
            array('iso' => 'KH', 'name' => 'Cambodia',  'phonecode' => '855'),
            array('iso' => 'CM', 'name' => 'Cameroon',  'phonecode' => '237'),
            array('iso' => 'CA', 'name' => 'Canada',  'phonecode' => '1'),
            array('iso' => 'CV', 'name' => 'Cape Verde',  'phonecode' => '238'),
            array('iso' => 'KY', 'name' => 'Cayman Islands',  'phonecode' => '1345'),
            array('iso' => 'CF', 'name' => 'Central African Republic', 'phonecode' => '236'),
            array('iso' => 'TD', 'name' => 'Chad',  'phonecode' => '235'),
            array('iso' => 'CL', 'name' => 'Chile',  'phonecode' => '56'),
            array('iso' => 'CN', 'name' => 'China',  'phonecode' => '86'),
            array('iso' => 'CX', 'name' => 'Christmas Island',  'phonecode' => '61'),
            array('iso' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'phonecode' => '672'),
            array('iso' => 'CO', 'name' => 'Colombia',  'phonecode' => '57'),
            array('iso' => 'KM', 'name' => 'Comoros',  'phonecode' => '269'),
            array('iso' => 'CG', 'name' => 'Congo', 'phonecode' => '242'),
            array('iso' => 'CD', 'name' => 'Congo, the Democratic Republic of the',  'phonecode' => '242'),
            array('iso' => 'CK', 'name' => 'Cook Islands',  'phonecode' => '682'),
            array('iso' => 'CR', 'name' => 'Costa Rica', 'phonecode' => '506'),
            array('iso' => 'CI', 'name' => 'Cote D\'Ivoire',  'phonecode' => '225'),
            array('iso' => 'HR', 'name' => 'Croatia',  'phonecode' => '385'),
            array('iso' => 'CU', 'name' => 'Cuba', 'phonecode' => '53'),
            array('iso' => 'CY', 'name' => 'Cyprus',  'phonecode' => '357'),
            array('iso' => 'CZ', 'name' => 'Czech Republic',  'phonecode' => '420'),
            array('iso' => 'DK', 'name' => 'Denmark',  'phonecode' => '45'),
            array('iso' => 'DJ', 'name' => 'Djibouti',  'phonecode' => '253'),
            array('iso' => 'DM', 'name' => 'Dominica',  'phonecode' => '1767'),
            array('iso' => 'DO', 'name' => 'Dominican Republic',  'phonecode' => '1809'),
            array('iso' => 'EC', 'name' => 'Ecuador',  'phonecode' => '593'),
            array('iso' => 'EG', 'name' => 'Egypt',  'phonecode' => '20'),
            array('iso' => 'SV', 'name' => 'El Salvador',  'phonecode' => '503'),
            array('iso' => 'GQ', 'name' => 'Equatorial Guinea',  'phonecode' => '240'),
            array('iso' => 'ER', 'name' => 'Eritrea',  'phonecode' => '291'),
            array('iso' => 'EE', 'name' => 'Estonia',  'phonecode' => '372'),
            array('iso' => 'ET', 'name' => 'Ethiopia', 'phonecode' => '251'),
            array('iso' => 'FK', 'name' => 'Falkland Islands (Malvinas)',  'phonecode' => '500'),
            array('iso' => 'FO', 'name' => 'Faroe Islands',  'phonecode' => '298'),
            array('iso' => 'FJ', 'name' => 'Fiji',  'phonecode' => '679'),
            array('iso' => 'FI', 'name' => 'Finland',  'phonecode' => '358'),
            array('iso' => 'FR', 'name' => 'France',  'phonecode' => '33'),
            array('iso' => 'GF', 'name' => 'French Guiana', 'phonecode' => '594'),
            array('iso' => 'PF', 'name' => 'French Polynesia',  'phonecode' => '689'),
            array('iso' => 'TF', 'name' => 'French Southern Territories', 'phonecode' => '0'),
            array('iso' => 'GA', 'name' => 'Gabon',  'phonecode' => '241'),
            array('iso' => 'GM', 'name' => 'Gambia',  'phonecode' => '220'),
            array('iso' => 'GE', 'name' => 'Georgia',  'phonecode' => '995'),
            array('iso' => 'DE', 'name' => 'Germany',  'phonecode' => '49'),
            array('iso' => 'GH', 'name' => 'Ghana',  'phonecode' => '233'),
            array('iso' => 'GI', 'name' => 'Gibraltar',  'phonecode' => '350'),
            array('iso' => 'GR', 'name' => 'Greece',  'phonecode' => '30'),
            array('iso' => 'GL', 'name' => 'Greenland',  'phonecode' => '299'),
            array('iso' => 'GD', 'name' => 'Grenada', 'phonecode' => '1473'),
            array('iso' => 'GP', 'name' => 'Guadeloupe',  'phonecode' => '590'),
            array('iso' => 'GU', 'name' => 'Guam', 'phonecode' => '1671'),
            array('iso' => 'GT', 'name' => 'Guatemala',  'phonecode' => '502'),
            array('iso' => 'GN', 'name' => 'Guinea', 'phonecode' => '224'),
            array('iso' => 'GW', 'name' => 'Guinea-Bissau',  'phonecode' => '245'),
            array('iso' => 'GY', 'name' => 'Guyana',  'phonecode' => '592'),
            array('iso' => 'HT', 'name' => 'Haiti', 'phonecode' => '509'),
            array('iso' => 'HM', 'name' => 'Heard Island and Mcdonald Islands', 'phonecode' => '0'),
            array('iso' => 'VA', 'name' => 'Holy See (Vatican City State)',  'phonecode' => '39'),
            array('iso' => 'HN', 'name' => 'Honduras', 'phonecode' => '504'),
            array('iso' => 'HK', 'name' => 'Hong Kong',  'phonecode' => '852'),
            array('iso' => 'HU', 'name' => 'Hungary', 'phonecode' => '36'),
            array('iso' => 'IS', 'name' => 'Iceland',  'phonecode' => '354'),
            array('iso' => 'IN', 'name' => 'India', 'phonecode' => '91'),


            // Records 100-199 (Indonesia to Spain)

            array('iso' => 'ID', 'name' => 'Indonesia', 'phonecode' => '62'),
            array('iso' => 'IR', 'name' => 'Iran, Islamic Republic of', 'phonecode' => '98'),
            array('iso' => 'IQ', 'name' => 'Iraq', 'phonecode' => '964'),
            array('iso' => 'IE', 'name' => 'Ireland', 'phonecode' => '353'),
            array('iso' => 'IL', 'name' => 'Israel', 'phonecode' => '972'),
            array('iso' => 'IT', 'name' => 'Italy', 'phonecode' => '39'),
            array('iso' => 'JM', 'name' => 'Jamaica', 'phonecode' => '1876'),
            array('iso' => 'JP', 'name' => 'Japan', 'phonecode' => '81'),
            array('iso' => 'JO', 'name' => 'Jordan', 'phonecode' => '962'),
            array('iso' => 'KZ', 'name' => 'Kazakhstan', 'phonecode' => '7'),
            array('iso' => 'KE', 'name' => 'Kenya',  'phonecode' => '254'),
            array('iso' => 'KI', 'name' => 'Kiribati',  'phonecode' => '686'),
            array('iso' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of',  'phonecode' => '850'),
            array('iso' => 'KR', 'name' => 'Korea, Republic of',  'phonecode' => '82'),
            array('iso' => 'KW', 'name' => 'Kuwait',  'phonecode' => '965'),
            array('iso' => 'KG', 'name' => 'Kyrgyzstan',  'phonecode' => '996'),
            array('iso' => 'LA', 'name' => 'Lao People\'s Democratic Republic',  'phonecode' => '856'),
            array('iso' => 'LV', 'name' => 'Latvia',  'phonecode' => '371'),
            array('iso' => 'LB', 'name' => 'Lebanon',  'phonecode' => '961'),
            array('iso' => 'LS', 'name' => 'Lesotho',  'phonecode' => '266'),
            array('iso' => 'LR', 'name' => 'Liberia', 'phonecode' => '231'),
            array('iso' => 'LY', 'name' => 'Libyan Arab Jamahiriya',  'phonecode' => '218'),
            array('iso' => 'LI', 'name' => 'Liechtenstein',  'phonecode' => '423'),
            array('iso' => 'LT', 'name' => 'Lithuania',  'phonecode' => '370'),
            array('iso' => 'LU', 'name' => 'Luxembourg',  'phonecode' => '352'),
            array('iso' => 'MO', 'name' => 'Macao',  'phonecode' => '853'),
            array('iso' => 'MK', 'name' => 'Macedonia, the Former Yugoslav Republic of',  'phonecode' => '389'),
            array('iso' => 'MG', 'name' => 'Madagascar',  'phonecode' => '261'),
            array('iso' => 'MW', 'name' => 'Malawi',  'phonecode' => '265'),
            array('iso' => 'MY', 'name' => 'Malaysia',  'phonecode' => '60'),
            array('iso' => 'MV', 'name' => 'Maldives',  'phonecode' => '960'),
            array('iso' => 'ML', 'name' => 'Mali',  'phonecode' => '223'),
            array('iso' => 'MT', 'name' => 'Malta',  'phonecode' => '356'),
            array('iso' => 'MH', 'name' => 'Marshall Islands',  'phonecode' => '692'),
            array('iso' => 'MQ', 'name' => 'Martinique',  'phonecode' => '596'),
            array('iso' => 'MR', 'name' => 'Mauritania',  'phonecode' => '222'),
            array('iso' => 'MU', 'name' => 'Mauritius',  'phonecode' => '230'),
            array('iso' => 'YT', 'name' => 'Mayotte', 'phonecode' => '269'),
            array('iso' => 'MX', 'name' => 'Mexico',  'phonecode' => '52'),
            array('iso' => 'FM', 'name' => 'Micronesia, Federated States of',  'phonecode' => '691'),
            array('iso' => 'MD', 'name' => 'Moldova, Republic of', 'phonecode' => '373'),
            array('iso' => 'MC', 'name' => 'Monaco',  'phonecode' => '377'),
            array('iso' => 'MN', 'name' => 'Mongolia',  'phonecode' => '976'),
            array('iso' => 'MS', 'name' => 'Montserrat',  'phonecode' => '1664'),
            array('iso' => 'MA', 'name' => 'Morocco',  'phonecode' => '212'),
            array('iso' => 'MZ', 'name' => 'Mozambique',  'phonecode' => '258'),
            array('iso' => 'MM', 'name' => 'Myanmar',  'phonecode' => '95'),
            array('iso' => 'NA', 'name' => 'Namibia',  'phonecode' => '264'),
            array('iso' => 'NR', 'name' => 'Nauru',  'phonecode' => '674'),
            array('iso' => 'NP', 'name' => 'Nepal',  'phonecode' => '977'),
            array('iso' => 'NL', 'name' => 'Netherlands',  'phonecode' => '31'),
            array('iso' => 'AN', 'name' => 'Netherlands Antilles',  'phonecode' => '599'),
            array('iso' => 'NC', 'name' => 'New Caledonia',  'phonecode' => '687'),
            array('iso' => 'NZ', 'name' => 'New Zealand',  'phonecode' => '64'),
            array('iso' => 'NI', 'name' => 'Nicaragua',  'phonecode' => '505'),
            array('iso' => 'NE', 'name' => 'Niger',  'phonecode' => '227'),
            array('iso' => 'NG', 'name' => 'Nigeria',  'phonecode' => '234'),
            array('iso' => 'NU', 'name' => 'Niue',  'phonecode' => '683'),
            array('iso' => 'NF', 'name' => 'Norfolk Island',  'phonecode' => '672'),
            array('iso' => 'MP', 'name' => 'Northern Mariana Islands', 'phonecode' => '1670'),
            array('iso' => 'NO', 'name' => 'Norway',  'phonecode' => '47'),
            array('iso' => 'OM', 'name' => 'Oman',  'phonecode' => '968'),
            array('iso' => 'PK', 'name' => 'Pakistan',  'phonecode' => '92'),
            array('iso' => 'PW', 'name' => 'Palau',  'phonecode' => '680'),
            array('iso' => 'PS', 'name' => 'Palestinian Territory, Occupied', 'phonecode' => '970'),
            array('iso' => 'PA', 'name' => 'Panama', 'phonecode' => '507'),
            array('iso' => 'PG', 'name' => 'Papua New Guinea', 'phonecode' => '675'),
            array('iso' => 'PY', 'name' => 'Paraguay', 'phonecode' => '595'),
            array('iso' => 'PE', 'name' => 'Peru', 'phonecode' => '51'),
            array('iso' => 'PH', 'name' => 'Philippines', 'phonecode' => '63'),
            array('iso' => 'PN', 'name' => 'Pitcairn', 'phonecode' => '0'),
            array('iso' => 'PL', 'name' => 'Poland', 'phonecode' => '48'),
            array('iso' => 'PT', 'name' => 'Portugal', 'phonecode' => '351'),
            array('iso' => 'PR', 'name' => 'Puerto Rico', 'phonecode' => '1787'),
            array('iso' => 'QA', 'name' => 'Qatar', 'phonecode' => '974'),
            array('iso' => 'RE', 'name' => 'Reunion', 'phonecode' => '262'),
            array('iso' => 'RO', 'name' => 'Romania', 'phonecode' => '40'),
            array('iso' => 'RU', 'name' => 'Russian Federation',  'phonecode' => '70'),
            array('iso' => 'RW', 'name' => 'Rwanda', 'phonecode' => '250'),
            array('iso' => 'SH', 'name' => 'Saint Helena',  'phonecode' => '290'),
            array('iso' => 'KN', 'name' => 'Saint Kitts and Nevis', 'phonecode' => '1869'),
            array('iso' => 'LC', 'name' => 'Saint Lucia',  'phonecode' => '1758'),
            array('iso' => 'PM', 'name' => 'Saint Pierre and Miquelon',  'phonecode' => '508'),
            array('iso' => 'VC', 'name' => 'Saint Vincent and the Grenadines',  'phonecode' => '1784'),
            array('iso' => 'WS', 'name' => 'Samoa', 'phonecode' => '684'),
            array('iso' => 'SM', 'name' => 'San Marino', 'phonecode' => '378'),
            array('iso' => 'ST', 'name' => 'Sao Tome and Principe', 'phonecode' => '239'),
            array('iso' => 'SA', 'name' => 'Saudi Arabia', 'phonecode' => '966'),
            array('iso' => 'SN', 'name' => 'Senegal', 'phonecode' => '221'),
            array('iso' => 'CS', 'name' => 'Serbia and Montenegro', 'phonecode' => '381'),
            array('iso' => 'SC', 'name' => 'Seychelles', 'phonecode' => '248'),
            array('iso' => 'SL', 'name' => 'Sierra Leone', 'phonecode' => '232'),
            array('iso' => 'SG', 'name' => 'Singapore', 'phonecode' => '65'),
            array('iso' => 'SK', 'name' => 'Slovakia', 'phonecode' => '421'),
            array('iso' => 'SI', 'name' => 'Slovenia', 'phonecode' => '386'),
            array('iso' => 'SB', 'name' => 'Solomon Islands', 'phonecode' => '677'),
            array('iso' => 'SO', 'name' => 'Somalia', 'phonecode' => '252'),
            array('iso' => 'ZA', 'name' => 'South Africa', 'phonecode' => '27'),
            array('iso' => 'GS', 'name' => 'South Georgia and the South Sandwich Islands', 'phonecode' => '0'),
            array('iso' => 'ES', 'name' => 'Spain', 'phonecode' => '34'),


            // Records 200-253 (Sri Lanka to South Sudan)

            array('iso' => 'LK', 'name' => 'Sri Lanka', 'phonecode' => '94'),
            array('iso' => 'SD', 'name' => 'Sudan',  'phonecode' => '249'),
            array('iso' => 'SR', 'name' => 'Suriname',  'phonecode' => '597'),
            array('iso' => 'SJ', 'name' => 'Svalbard and Jan Mayen',  'phonecode' => '47'),
            array('iso' => 'SZ', 'name' => 'Swaziland',  'phonecode' => '268'),
            array('iso' => 'SE', 'name' => 'Sweden',  'phonecode' => '46'),
            array('iso' => 'CH', 'name' => 'Switzerland',  'phonecode' => '41'),
            array('iso' => 'SY', 'name' => 'Syrian Arab Republic', 'phonecode' => '963'),
            array('iso' => 'TW', 'name' => 'Taiwan, Province of China', 'phonecode' => '886'),
            array('iso' => 'TJ', 'name' => 'Tajikistan',  'phonecode' => '992'),
            array('iso' => 'TZ', 'name' => 'Tanzania, United Republic of', 'phonecode' => '255'),
            array('iso' => 'TH', 'name' => 'Thailand', 'phonecode' => '66'),
            array('iso' => 'TL', 'name' => 'Timor-Leste', 'phonecode' => '670'),
            array('iso' => 'TG', 'name' => 'Togo', 'phonecode' => '228'),
            array('iso' => 'TK', 'name' => 'Tokelau',  'phonecode' => '690'),
            array('iso' => 'TO', 'name' => 'Tonga',  'phonecode' => '676'),
            array('iso' => 'TT', 'name' => 'Trinidad and Tobago',  'phonecode' => '1868'),
            array('iso' => 'TN', 'name' => 'Tunisia', 'phonecode' => '216'),
            array('iso' => 'TR', 'name' => 'Turkey',  'phonecode' => '90'),
            array('iso' => 'TM', 'name' => 'Turkmenistan', 'phonecode' => '7370'),
            array('iso' => 'TC', 'name' => 'Turks and Caicos Islands',  'phonecode' => '1649'),
            array('iso' => 'TV', 'name' => 'Tuvalu', 'phonecode' => '688'),
            array('iso' => 'UG', 'name' => 'Uganda',  'phonecode' => '256'),
            array('iso' => 'UA', 'name' => 'Ukraine', 'phonecode' => '380'),
            array('iso' => 'AE', 'name' => 'United Arab Emirates', 'phonecode' => '971'),
            array('iso' => 'GB', 'name' => 'United Kingdom',  'phonecode' => '44'),
            array('iso' => 'US', 'name' => 'United States', 'phonecode' => '1'),
            array('iso' => 'UM', 'name' => 'United States Minor Outlying Islands',  'phonecode' => '1'),
            array('iso' => 'UY', 'name' => 'Uruguay', 'phonecode' => '598'),
            array('iso' => 'UZ', 'name' => 'Uzbekistan',  'phonecode' => '998'),
            array('iso' => 'VU', 'name' => 'Vanuatu',  'phonecode' => '678'),
            array('iso' => 'VE', 'name' => 'Venezuela',  'phonecode' => '58'),
            array('iso' => 'VN', 'name' => 'Viet Nam',  'phonecode' => '84'),
            array('iso' => 'VG', 'name' => 'Virgin Islands, British',  'phonecode' => '1284'),
            array('iso' => 'VI', 'name' => 'Virgin Islands, U.S.',  'phonecode' => '1340'),
            array('iso' => 'WF', 'name' => 'Wallis and Futuna', 'phonecode' => '681'),
            array('iso' => 'EH', 'name' => 'Western Sahara', 'phonecode' => '212'),
            array('iso' => 'YE', 'name' => 'Yemen',  'phonecode' => '967'),
            array('iso' => 'ZM', 'name' => 'Zambia',  'phonecode' => '260'),
            array('iso' => 'ZW', 'name' => 'Zimbabwe',  'phonecode' => '263'),
            array('iso' => 'RS', 'name' => 'Serbia', 'phonecode' => '381'),
            array('iso' => 'AP', 'name' => 'Asia / Pacific Region', 'phonecode' => '0'),
            array('iso' => 'ME', 'name' => 'Montenegro',  'phonecode' => '382'),
            array('iso' => 'AX', 'name' => 'Aland Islands', 'phonecode' => '358'),
            array('iso' => 'BQ', 'name' => 'Bonaire, Sint Eustatius and Saba', 'phonecode' => '599'),
            array('iso' => 'CW', 'name' => 'Curacao',  'phonecode' => '599'),
            array('iso' => 'GG', 'name' => 'Guernsey', 'phonecode' => '44'),
            array('iso' => 'IM', 'name' => 'Isle of Man', 'phonecode' => '44'),
            array('iso' => 'JE', 'name' => 'Jersey', 'phonecode' => '44'),
            array('iso' => 'XK', 'name' => 'Kosovo', 'phonecode' => '381'),
            array('iso' => 'BL', 'name' => 'Saint Barthelemy', 'phonecode' => '590'),
            array('iso' => 'MF', 'name' => 'Saint Martin',  'phonecode' => '590'),
            array('iso' => 'SX', 'name' => 'Sint Maarten',  'phonecode' => '1'),
            array('iso' => 'SS', 'name' => 'South Sudan',  'phonecode' => '211')
        );

        DB::table('countries')->insert($countries);
        // $country = Country::insert($countries);
    }
}
