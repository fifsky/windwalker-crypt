<?php
/**
 * Part of Windwalker project Test files.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Windwalker\Crypt\Test;

use Windwalker\Crypt\Cipher\Cipher3DES;

/**
 * Test class of Cipher3DES
 *
 * @since {DEPLOY_VERSION}
 */
class Mcrypt3DESTest extends AbstractMcryptTestCase
{
	/**
	 * Test instance.
	 *
	 * @var Cipher3DES
	 */
	protected $instance;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->instance = new Cipher3DES;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
	}

	/**
	 * Method to test getIVSize().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Cipher\McryptCipher::getIVSize
	 */
	public function testGetIVSize()
	{
		$this->assertEquals(8, $this->instance->getIVSize());
	}
}
