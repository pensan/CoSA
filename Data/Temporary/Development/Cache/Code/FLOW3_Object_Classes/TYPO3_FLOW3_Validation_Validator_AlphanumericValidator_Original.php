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
 * Validator for alphanumeric strings
 *
 * @api
 * @FLOW3\Scope("singleton")
 */
class AlphanumericValidator_Original extends \TYPO3\FLOW3\Validation\Validator\AbstractValidator {

	/**
	 * Returns TRUE, if the given property ($propertyValue) is a valid
	 * alphanumeric string, which is defined as [a-zA-Z0-9]*.
	 *
	 * @param mixed $value The value that should be validated
	 * @return void
	 * @throws \TYPO3\FLOW3\Validation\Exception\InvalidSubjectException if this validator cannot validate the given value
	 * @api
	 */
	protected function isValid($value) {
		if (is_string($value) && preg_match('/^[a-z0-9]*$/i', $value)) return;
		$this->addError('Only the characters a to z and numbers are allowed.', 1221551320);
	}
}


#0             %CLASS%TYPO3_FLOW3_Validation_Validator_AlphanumericValidator1513      