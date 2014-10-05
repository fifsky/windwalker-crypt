<?php
/**
 * Part of Windwalker project Test files.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Windwalker\Crypt\Test;

use Windwalker\Crypt\Cipher\CipherSimple;
use Windwalker\Crypt\Crypt;

/**
 * Test class of Crypt
 *
 * @since {DEPLOY_VERSION}
 */
class CryptTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test instance.
	 *
	 * @var Crypt
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
		$this->instance = new Crypt(new CipherSimple);
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
	 * Method to test encrypt().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::encrypt
	 * @covers Windwalker\Crypt\Crypt::verify
	 */
	public function testEncrypt()
	{
		$hash = $this->instance->encrypt('windwalker');

		$this->assertTrue($this->instance->verify('windwalker', $hash));

		$crypt = new Crypt(new CipherSimple, 'flower');

		$hash = $crypt->encrypt('windwalker');

		$this->assertTrue($crypt->verify('windwalker', $hash, 'flower'));
	}

	/**
	 * Method to test decrypt().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::decrypt
	 */
	public function testDecrypt()
	{
		$hash = $this->instance->encrypt('windwalker');

		$this->assertEquals('windwalker', $this->instance->decrypt($hash));
	}

	/**
	 * Method to test getIv().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::getIv
	 * @TODO   Implement testGetIv().
	 */
	public function testGetIv()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test setIv().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::setIv
	 * @TODO   Implement testSetIv().
	 */
	public function testSetIv()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test getKey().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::getKey
	 * @TODO   Implement testGetKey().
	 */
	public function testGetKey()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test setKey().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Crypt\Crypt::setKey
	 * @TODO   Implement testSetKey().
	 */
	public function testSetKey()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}
}
