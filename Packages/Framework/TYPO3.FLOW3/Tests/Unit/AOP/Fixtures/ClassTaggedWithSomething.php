<?php
namespace TYPO3\FLOW3\Tests\AOP\Fixture;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Class tagged with "something"
 *
 * @FLOW3\Aspect
 * @FLOW3\Scope("singleton")
 */
class ClassTaggedWithSomething {

	/**
	 * Some method
	 *
	 * @return void
	 */
	public function someMethod() {

	}

}
?>