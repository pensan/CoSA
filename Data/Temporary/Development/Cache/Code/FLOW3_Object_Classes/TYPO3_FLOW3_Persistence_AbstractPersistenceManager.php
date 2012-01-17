<?php
namespace TYPO3\FLOW3\Persistence;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

	/**
	 * Autogenerated Proxy Class
	 */
abstract class AbstractPersistenceManager extends AbstractPersistenceManager_Original implements \TYPO3\FLOW3\Object\Proxy\ProxyInterface {

	private $FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array();

	private $FLOW3_AOP_Proxy_groupedAdviceChains = array();

	private $FLOW3_AOP_Proxy_methodIsInAdviceMode = array();


	/**
	 * Autogenerated Proxy Method
	 */
	public function __construct() {

		$this->FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 protected function FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray() {
		if (method_exists(get_parent_class($this), 'FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray')) parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();

		$objectManager = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager;
		$this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array(
			'getObjectByIdentifier' => array(
				'TYPO3\FLOW3\AOP\Advice\AroundAdvice' => array(
					new \TYPO3\FLOW3\AOP\Advice\AroundAdvice('TYPO3\FLOW3\Security\Aspect\PersistenceQueryRewritingAspect', 'checkAccessAfterFetchingAnObjectByIdentifier', $objectManager, NULL),
				),
			),
		);
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

		$this->FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();
		$result = NULL;
		if (method_exists(get_parent_class($this), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function FLOW3_AOP_Proxy_getAdviceChains($methodName) {
		$adviceChains = array();
		if (isset($this->FLOW3_AOP_Proxy_groupedAdviceChains[$methodName])) {
			$adviceChains = $this->FLOW3_AOP_Proxy_groupedAdviceChains[$methodName];
		} else {
			if (isset($this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices[$methodName])) {
				$groupedAdvices = $this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices[$methodName];
				if (isset($groupedAdvices['TYPO3\FLOW3\AOP\Advice\AroundAdvice'])) {
					$this->FLOW3_AOP_Proxy_groupedAdviceChains[$methodName]['TYPO3\FLOW3\AOP\Advice\AroundAdvice'] = new \TYPO3\FLOW3\AOP\Advice\AdviceChain($groupedAdvices['TYPO3\FLOW3\AOP\Advice\AroundAdvice'], $this);
					$adviceChains = $this->FLOW3_AOP_Proxy_groupedAdviceChains[$methodName];
				}
			}
		}
		return $adviceChains;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function FLOW3_AOP_Proxy_invokeJoinPoint(\TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint) {
		if (__CLASS__ !== $joinPoint->getClassName()) return parent::FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);
		if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode[$joinPoint->getMethodName()])) {
			return call_user_func_array(array('self', $joinPoint->getMethodName()), $joinPoint->getMethodArguments());
		}
	}

	/**
	 * Autogenerated Proxy Method
	 * @param mixed $identifier
	 * @param string $objectType
	 * @param boolean $useLazyLoading Set to TRUE if you want to use lazy loading for this object
	 * @return object The object for the identifier if it is known, or NULL
	 */
	 public function getObjectByIdentifier($identifier, $objectType = NULL, $useLazyLoading = FALSE) {

		if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['getObjectByIdentifier'])) {
		$result = parent::getObjectByIdentifier($identifier, $objectType, $useLazyLoading);

		} else {
			$this->FLOW3_AOP_Proxy_methodIsInAdviceMode['getObjectByIdentifier'] = TRUE;
			try {
			
					$methodArguments = array();

				$methodArguments['identifier'] = $identifier;
				$methodArguments['objectType'] = $objectType;
				$methodArguments['useLazyLoading'] = $useLazyLoading;
			
					$adviceChains = $this->FLOW3_AOP_Proxy_getAdviceChains('getObjectByIdentifier');
					$adviceChain = $adviceChains['TYPO3\FLOW3\AOP\Advice\AroundAdvice'];
					$adviceChain->rewind();
					$result = $adviceChain->proceed(new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\FLOW3\Persistence\AbstractPersistenceManager', 'getObjectByIdentifier', $methodArguments, $adviceChain));

			} catch(\Exception $e) {
				unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['getObjectByIdentifier']);
				throw $e;
			}
			unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['getObjectByIdentifier']);
		}
		return $result;
	}
}
#0             %CLASS%TYPO3_FLOW3_Persistence_AbstractPersistenceManager4432      