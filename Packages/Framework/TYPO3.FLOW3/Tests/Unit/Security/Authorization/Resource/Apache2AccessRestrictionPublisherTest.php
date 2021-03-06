<?php
namespace TYPO3\FLOW3\Security\Authorization\Resource;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Testcase for the Apache2 access restriction publisher
 *
 */
class Apache2AccessRestrictionPublisherTest extends \TYPO3\FLOW3\Tests\UnitTestCase {

	/**
	 */
	public function setUp() {
		\vfsStreamWrapper::register();
		\vfsStreamWrapper::setRoot(new \vfsStreamDirectory('Foo'));
	}

	/**
	 * @test
	 */
	public function publishAccessRestrictionsForPathPublishesAHtaccessFileInTheGivenDirectory() {
		$mockEnvironment = $this->getMock('TYPO3\FLOW3\Utility\Environment', array(), array(), '', FALSE);
		$mockEnvironment->expects($this->once())->method('getRemoteAddress')->will($this->returnValue('192.168.1.234'));

		$publisher = $this->getAccessibleMock('TYPO3\FLOW3\Security\Authorization\Resource\Apache2AccessRestrictionPublisher', array('dummy'));
		$publisher->_set('environment', $mockEnvironment);
		$publisher->publishAccessRestrictionsForPath('vfs://Foo/');

		$expectedFileContents = 'Deny from all' . chr(10) . 'Allow from 192.168.1.234';

		$this->assertFileExists('vfs://Foo/.htaccess');
		$this->assertEquals($expectedFileContents, file_get_contents('vfs://Foo/.htaccess'));
	}
}
