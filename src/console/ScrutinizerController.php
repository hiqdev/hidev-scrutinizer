<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\console;

/**
 * Goal for Scrutinizer.
 */
class ScrutinizerController extends \hidev\base\Controller
{
    public function actionUploadCoverage()
    {
        $lang = $this->take('package')->getLanguage();

        return $this->runAction("upload-$lang-coverage");
    }

    public function actionUploadPhpCoverage()
    {
        return $this->passthru('php-ocular', ['code-coverage:upload', '--format=php-clover', 'coverage.clover']);
    }

    public function actionUploadPythonCoverage()
    {
        return $this->passthru('python-ocular', ['--data-file', '.coverage']);
    }
}
