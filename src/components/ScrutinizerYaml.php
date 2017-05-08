<?php
/**
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\components;

/**
 * `.scrutinizer.yml` config file.
 */
class ScrutinizerYaml extends \hidev\components\File
{
    protected $_file = '.scrutinizer.yml';
}
