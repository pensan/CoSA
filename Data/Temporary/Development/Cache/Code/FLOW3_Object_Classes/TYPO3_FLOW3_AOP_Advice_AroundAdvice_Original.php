<?php
namespace TYPO3\FLOW3\AOP\Advice;

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
 * Implementation of the Around Advice.
 *
 */
class AroundAdvice_Original extends \TYPO3\FLOW3\AOP\Advice\AbstractAdvice implements \TYPO3\FLOW3\AOP\Advice\AdviceInterface {

	/**
	 * Invokes the advice method
	 *
	 * @param \TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint The current join point which is passed to the advice method
	 * @return Result of the advice method
	 */
	public function invoke(\TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint) {
		if ($this->runtimeEvaluator !== NULL && $this->runtimeEvaluator->__invoke($joinPoint) === FALSE) {
			return $joinPoint->getAdviceChain()->proceed($joinPoint);
		}

		$adviceObject = $this->objectManager->get($this->aspectObjectName);
		$methodName = $this->adviceMethodName;
		return $adviceObject->$methodName($joinPoint);
	}
}


#0             %CLASS%TYPO3_FLOW3_AOP_Advice_AroundAdvice1519      