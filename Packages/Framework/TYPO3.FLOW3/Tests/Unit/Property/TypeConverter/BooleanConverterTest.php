<?php
namespace TYPO3\FLOW3\Tests\Unit\Property\TypeConverter;

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
 * Testcase for the Boolean converter
 *
 */
class BooleanConverterTest extends \TYPO3\FLOW3\Tests\UnitTestCase {


	/**
	 * @var \TYPO3\FLOW3\Property\TypeConverter\BooleanConverter
	 */
	protected $converter;

	public function setUp() {
		$this->converter = new \TYPO3\FLOW3\Property\TypeConverter\BooleanConverter();
	}

	/**
	 * @test
	 */
	public function checkMetadata() {
		$this->assertEquals(array('boolean', 'string'), $this->converter->getSupportedSourceTypes(), 'Source types do not match');
		$this->assertEquals('boolean', $this->converter->getSupportedTargetType(), 'Target type does not match');
		$this->assertEquals(1, $this->converter->getPriority(), 'Priority does not match');
	}

	/**
	 * @test
	 */
	public function convertFromDoesNotModifyTheBooleanSource() {
		$source = TRUE;
		$this->assertEquals($source, $this->converter->convertFrom($source, 'boolean'));
	}

	/**
	 * @test
	 */
	public function convertFromCastsSourceStringToBoolean() {
		$source = 'true';
		$this->assertSame(TRUE, $this->converter->convertFrom($source, 'boolean'));
	}

	/**
	 * @test
	 */
	public function convertFromCastsNumericSourceStringToBoolean() {
		$source = '1';
		$this->assertSame(TRUE, $this->converter->convertFrom($source, 'boolean'));
	}
}
?>