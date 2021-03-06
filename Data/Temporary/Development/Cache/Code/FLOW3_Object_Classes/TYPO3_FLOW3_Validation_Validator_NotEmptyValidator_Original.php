<?php
namespace TYPO3\FLOW3\Validation\Validator;

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
 * Validator for not empty values
 *
 * @api
 * @FLOW3\Scope("singleton")
 */
class NotEmptyValidator_Original extends \TYPO3\FLOW3\Validation\Validator\AbstractValidator {

	/**
	 * Checks if the given property ($propertyValue) is not empty (NULL or empty string).
	 *
	 * If at least one error occurred, the result is FALSE.
	 *
	 * @param mixed $value The value that should be validated
	 * @return void
	 * @api
	 */
	protected function isValid($value) {
		if ($value === NULL) {
			$this->addError('This property is required.', 1221560910);
		}
		if ($value === '') {
			$this->addError('This property is required.', 1221560718);
		}
	}
}


#0             %CLASS%TYPO3_FLOW3_Validation_Validator_NotEmptyValidator1427      