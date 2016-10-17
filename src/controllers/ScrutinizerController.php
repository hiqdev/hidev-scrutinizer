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
    public function getLanguage()
    {
        return $this->takeGoal('.travis.yml')->getItem('language');
    }

    public function actionUploadCoverage()
    {
        $lang = $this->getLanguage();
        return $this->runActions(["get-ocular-$lang", "run-ocular-$lang"]);
    }

    public function actionGetOcularPhp()
    {
        if (file_exists('ocular.phar')) {
            return 0;
        }

        return $this->passthru('wget', 'https://scrutinizer-ci.com/ocular.phar');
    }

    public function actionRunOcularPhp()
    {
        return $this->passthru('ocular', ['code-coverage:upload', '--format=php-clover', 'coverage.clover']);
    }

    public function actionGetOcularPython()
    {
        return null;
    }

    public function actionRunOcularPython()
    {
        return $this->passthru('ocular', ['--data-file', '.coverage']);
    }
}
