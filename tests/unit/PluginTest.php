<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\tests\unit;

use hidev\scrutinizer\Plugin;

/**
 * Tests for Plugin class.
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Plugin();
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertTrue(is_object($this->object));
    }
}
