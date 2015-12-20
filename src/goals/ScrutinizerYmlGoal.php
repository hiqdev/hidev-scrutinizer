<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\goals;

/**
 * Goal for .scrutinizer.yml config file.
 * For the moment PHP projects only.
 */
class ScrutinizerYmlGoal extends \hidev\goals\TemplateGoal
{
    protected $_file = '.scrutinizer.yml';

    /**
     * Adds defaults.
     */
    public function actionLoad()
    {
        $this->setItems([
            'tools' => [
                'php_code_coverage' => true,
                'external_code_coverage' => [
                    'timeout' => 600,
                ],
            ],
        ]);
        parent::actionLoad();
    }
}
