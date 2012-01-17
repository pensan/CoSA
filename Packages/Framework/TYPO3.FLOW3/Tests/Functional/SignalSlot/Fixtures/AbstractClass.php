<?php
namespace TYPO3\FLOW3\Tests\Functional\SignalSlot\Fixtures;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * An abstract class with a signal
 *
 */
abstract class AbstractClass {

	/**
	 * @return void
	 */
	public function triggerSomethingSignalFromAbstractClass() {
		$this->emitSomething();
	}

	/**
	 * @FLOW3\Signal
	 * @return void
	 */
	public function emitSomething() {
	}

}
?>