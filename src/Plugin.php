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
        ],
    ];
}
