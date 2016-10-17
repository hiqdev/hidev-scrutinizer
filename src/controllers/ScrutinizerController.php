<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\controllers;

/**
 * Goal for Scrutinizer.
 */
class ScrutinizerController extends \hidev\controllers\CommonController
{
    public function actionUploadCoverage()
    {
        $lang = $this->takePackage()->getLanguage();

        return $this->runActions(["upload-$lang-coverage"]);
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
