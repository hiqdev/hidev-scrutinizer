<?php
/**
 * HiDev plugin for Scrutinizer CI
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\tests\unit\console;

use hidev\scrutinizer\console\ScrutinizerYamlController;

/**
 * Tests for ScrutinizerYamlController.
 */
class ScrutinizerYamlControllerTest extends \PHPUnit\Framework\TestCase
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
        $this->assertInstanceOf(\hidev\base\Controller::class, $this->object);
    }
}
