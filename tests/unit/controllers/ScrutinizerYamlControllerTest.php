<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\tests\unit\controllers;

use hidev\scrutinizer\controllers\ScrutinizerYamlController;

/**
 * Tests for ScrutinizerYamlController.
 */
class ScrutinizerYamlControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ScrutinizerYamlController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ScrutinizerYamlController('.scrutinizer.yaml', null);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
