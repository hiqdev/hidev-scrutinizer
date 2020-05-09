<?php
/**
 * HiDev plugin for Scrutinizer CI
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'scrutinizer' => [
            'class' => \hidev\scrutinizer\console\ScrutinizerController::class,
        ],
        '.scrutinizer.yml' => [
            'class' => \hidev\scrutinizer\console\ScrutinizerYamlController::class,
        ],
    ],
    'components' => [
        'scrutinizer' => [
            'class' => \hidev\scrutinizer\components\Scrutinizer::class,
        ],
        '.scrutinizer.yml' => [
            'class' => \hidev\scrutinizer\components\ScrutinizerYaml::class,
        ],
        'readme' => [
            'knownBadges' => [
                'scrutinizer.coverage' => '[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/{{ app.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ app.github.full_name }}/)',
                'scrutinizer.quality'  => '[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/{{ app.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ app.github.full_name }}/)',
                'scrutinizer.build'    => '[![Scrutinizer Build Status](https://img.shields.io/scrutinizer/build/g/{{ app.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ app.github.full_name }}/build-status/master)',
            ],
        ],
        'binaries' => [
            'python-ocular' => [
                'name' => 'ocular',
                'class' => \hidev\base\BinaryPython::class,
                'package' => 'scrutinizer-ocular',
            ],
            'php-ocular' => [
                'name' => 'ocular',
                'class' => \hidev\base\BinaryPhp::class,
                'download' => 'https://scrutinizer-ci.com/ocular.phar',
            ],
        ],
    ],
    'aliases' => [
        '@hidev/scrutinizer' => dirname(__DIR__) . '/src',
    ],
];
