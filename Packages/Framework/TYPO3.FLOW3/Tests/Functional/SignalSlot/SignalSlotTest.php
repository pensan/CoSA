<?php
namespace TYPO3\FLOW3\Tests\Functional\SignalSlot;

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
 * Test suite for Signal Slot
 *
 */
class SignalSlotTest extends \TYPO3\FLOW3\Tests\FunctionalTestCase {

	/**
	 * @test
	 */
	public function signalsDeclaredInAbstractClassesAreFunctionalInSubClasses() {
		$subClass = new Fixtures\SubClass();

		$dispatcher = $this->objectManager->get('TYPO3\FLOW3\SignalSlot\Dispatcher');
		$dispatcher->connect('TYPO3\FLOW3\Tests\Functional\SignalSlot\Fixtures\SubClass', 'something', $subClass, 'somethingSlot');

		$subClass->triggerSomethingSignalFromSubClass();
		$this->assertTrue($subClass->slotWasCalled, 'from sub class');

		$subClass->slotWasCalled = FALSE;

		$subClass->triggerSomethingSignalFromAbstractClass();
		$this->assertTrue($subClass->slotWasCalled, 'from abstract class');
	}

}
?>