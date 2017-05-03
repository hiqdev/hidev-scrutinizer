<?php
/**
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\console;

/**
 * `.scrutinizer.yml` config file.
 */
class ScrutinizerYamlController extends \hidev\base\Controller
{
    public function actionIndex()
    {
        $this->take('.scrutinizer.yml')->save();
    }
}
