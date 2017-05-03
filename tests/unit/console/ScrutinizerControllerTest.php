<?php
/**
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\tests\unit\console;

use hidev\scrutinizer\console\ScrutinizerController;

class ScrutinizerControllerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ScrutinizerController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ScrutinizerController('scrutinizer', null);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(\hidev\base\Controller::class, $this->object);
    }
}
