<?php
namespace TYPO3\FLOW3\Security\Authorization\Interceptor;

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
 * This security interceptor always grants access.
 *
 * @FLOW3\Scope("singleton")
 */
class AccessGrant_Original implements \TYPO3\FLOW3\Security\Authorization\InterceptorInterface {

	/**
	 * Invokes nothing, always returns TRUE.
	 *
	 * @return boolean Always returns TRUE
	 */
	public function invoke() {
		return TRUE;
	}
}


#0             %CLASS%TYPO3_FLOW3_Security_Authorization_Interceptor_AccessGrant1126      