<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'scrutinizer'       => 'hidev\scrutinizer\goals\ScrutinizerGoal',
            '.scrutinizer.yml'  => 'hidev\scrutinizer\goals\ScrutinizerYmlGoal',
            'readme'            => [
                'markdownBadges' => [
                    'scrutinizer.coverage' => '[![Code Coverage](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/?branch=master)',
                    'scrutinizer.quality'  => '[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/?branch=master)',
                    'scrutinizer.build'    => '[![Build Status](https://scrutinizer-ci.com/g/{{ config.github.name }}/badges/build.png?b=master)](https://scrutinizer-ci.com/g/{{ config.github.name }}/build-status/master)',
                ],
            ],
        ],
    ];
}
