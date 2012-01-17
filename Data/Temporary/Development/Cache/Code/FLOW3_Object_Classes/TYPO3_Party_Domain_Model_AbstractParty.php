<?php
namespace TYPO3\Party\Domain\Model;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

	/**
	 * Autogenerated Proxy Class
	 * @TYPO3\FLOW3\Annotations\Entity
	 * @Doctrine\ORM\Mapping\InheritanceType("JOINED")
	 */
abstract class AbstractParty extends AbstractParty_Original implements \TYPO3\FLOW3\Object\Proxy\ProxyInterface, \TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicInterface {

	/**
	 * @var string
	 * @ORM\Id
	 * @ORM\Column(length=40)
	 * introduced by TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicAspect
	 */
	protected $FLOW3_Persistence_Identifier = NULL;

	private $FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array();

	private $FLOW3_AOP_Proxy_groupedAdviceChains = array();

	private $FLOW3_AOP_Proxy_methodIsInAdviceMode = array();


	/**
	 * Autogenerated Proxy Method
	 * @return void
	 */
	public function __construct() {

		$this->FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();

			if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__construct'])) {
		parent::__construct();

			} else {
				$this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__construct'] = TRUE;
				try {
				
					$methodArguments = array();

					$advices = $this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices['__construct']['TYPO3\FLOW3\AOP\Advice\BeforeAdvice'];
					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\Party\Domain\Model\AbstractParty', '__construct', $methodArguments);
					foreach ($advices as $advice) {
						$advice->invoke($joinPoint);
					}

					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\Party\Domain\Model\AbstractParty', '__construct', $methodArguments);
					$result = $this->FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);

				} catch(\Exception $e) {
					unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__construct']);
					throw $e;
				}
				unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__construct']);
				return;
			}
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 protected function FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray() {
		if (method_exists(get_parent_class($this), 'FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray')) parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();

		$objectManager = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager;
		$this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array(
			'__construct' => array(
				'TYPO3\FLOW3\AOP\Advice\BeforeAdvice' => array(
					new \TYPO3\FLOW3\AOP\Advice\BeforeAdvice('TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicAspect', 'generateUUID', $objectManager, NULL),
				),
			),
			'__clone' => array(
				'TYPO3\FLOW3\AOP\Advice\AfterReturningAdvice' => array(
					new \TYPO3\FLOW3\AOP\Advice\AfterReturningAdvice('TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicAspect', 'cloneObject', $objectManager, NULL),
					new \TYPO3\FLOW3\AOP\Advice\AfterReturningAdvice('TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicAspect', 'generateNewUuidForClone', $objectManager, NULL),
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
	 */
	 public function __clone() {

		if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__clone'])) {
		$result = NULL;

		} else {
			$this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__clone'] = TRUE;
			try {
			
					$methodArguments = array();

					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\Party\Domain\Model\AbstractParty', '__clone', $methodArguments);
					$result = $this->FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);

					$advices = $this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices['__clone']['TYPO3\FLOW3\AOP\Advice\AfterReturningAdvice'];
					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\Party\Domain\Model\AbstractParty', '__clone', $methodArguments, NULL, $result);
					foreach ($advices as $advice) {
						$advice->invoke($joinPoint);
					}

			} catch(\Exception $e) {
				unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__clone']);
				throw $e;
			}
			unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['__clone']);
		}
		return $result;
	}
}
#0             %CLASS%TYPO3_Party_Domain_Model_AbstractParty %CLASS%_TYPO3_FLOW3_Persistence_Aspect_PersistenceMagicInterface5685      