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


/**
 * Validator to chain many validators in a conjunction (logical and). So every
 * validator has to be valid, to make the whole conjunction valid.
 *
 * @api
 */
class ConjunctionValidator_Original extends \TYPO3\FLOW3\Validation\Validator\AbstractCompositeValidator {

	/**
	 * Checks if the given value is valid according to the validators of the conjunction.
	 *
	 * @param mixed $value The value that should be validated
	 * @return \TYPO3\FLOW3\Error\Result
	 * @api
	 */
	public function validate($value) {
		$result = new \TYPO3\FLOW3\Error\Result();
		foreach ($this->validators as $validator) {
			$result->merge($validator->validate($value));
		}
		return $result;
	}
}


#0             %CLASS%TYPO3_FLOW3_Validation_Validator_ConjunctionValidator1424      