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
 * Scrutinizer for Python.
 */
class ScrutinizerPythonController extends \hidev\controllers\CommonController
{
    public function actionUploadCoverage()
    {
        return $this->runActions(['get-ocular', 'run-ocular']);
    }

    public function actionGetOcular()
    {
        if (!$this->execCode('python',['-c', 'import scrutinizer.ocular'], true)) {
            return 0;
        }

        return $this->passthru('pip', ['install', 'scrutinizer-ocular']);
    }

    public function actionRunOcular()
    {
        return $this->passthru('ocular', ['--data-file', '.coverage']);
    }
}
