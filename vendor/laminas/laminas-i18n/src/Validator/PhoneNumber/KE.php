<?php

/**
 * @see       https://github.com/laminas/laminas-i18n for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n/blob/master/LICENSE.md New BSD License
 */

return [
    'code' => '254',
    'patterns' => [
        'national' => [
            'general' => '/^(?:20\\d{6,7}|[4-9]\\d{6,9})$/',
            'fixed' => '/^(?:20\\d{6,7}|4(?:[013]\\d{7}|[24-6]\\d{5,7})|5(?:[0-36-8]\\d{5,7}|[459]\\d{5})|6(?:[08]\\d{5}|[14-79]\\d{5,7}|2\\d{7}))$/',
            'mobile' => '/^7(?:0[0-8]|[123]\\d|5[0-6]|7[0-5]|8[5-9])\\d{6}$/',
            'tollfree' => '/^800[24-8]\\d{5,6}$/',
            'premium' => '/^900[02-578]\\d{5}$/',
            'shortcode' => '/^1(?:0[09]|1(?:[06]|9[0-2579])|2[13]|3[01])$/',
            'emergency' => '/^(?:112|999)$/',
        ],
        'possible' => [
            'general' => '/^\\d{5,10}$/',
            'fixed' => '/^\\d{5,9}$/',
            'mobile' => '/^\\d{9}$/',
            'tollfree' => '/^\\d{9,10}$/',
            'premium' => '/^\\d{9}$/',
            'shortcode' => '/^\\d{3,4}$/',
            'emergency' => '/^\\d{3}$/',
        ],
    ],
];