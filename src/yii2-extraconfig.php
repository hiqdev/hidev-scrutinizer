<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'scrutinizer' => [
                'class' => 'hidev\scrutinizer\controllers\ScrutinizerController',
            ],
            '.scrutinizer.yml' => [
                'class' => 'hidev\scrutinizer\controllers\ScrutinizerYamlController',
            ],
            'readme' => [
                'markdownBadges' => [
                    'scrutinizer.coverage' => '[![Code Coverage](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/?branch=master)',
                    'scrutinizer.quality'  => '[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/?branch=master)',
                    'scrutinizer.build'    => '[![Build Status](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/build.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/build-status/master)',
                ],
            ],
        ],
    ],
];
