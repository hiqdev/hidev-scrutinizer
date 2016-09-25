<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'scrutinizer' => [
                'class' => 'hidev\scrutinizer\controllers\ScrutinizerController',
            ],
            'scrutinizer-python' => [
                'class' => 'hidev\scrutinizer\controllers\ScrutinizerPythonController',
            ],
            '.scrutinizer.yml' => [
                'class' => 'hidev\scrutinizer\controllers\ScrutinizerYamlController',
            ],
            'readme' => [
                'markdownBadges' => [
                    'scrutinizer.coverage' => '[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/)',
                    'scrutinizer.quality'  => '[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/)',
                    'scrutinizer.build'    => '[![Scrutinizer Build Status](https://img.shields.io/scrutinizer/build/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/build-status/master)',
                ],
            ],
        ],
    ],
];
