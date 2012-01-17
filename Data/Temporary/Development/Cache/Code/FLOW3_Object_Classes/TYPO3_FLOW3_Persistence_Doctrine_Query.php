<?php
namespace TYPO3\FLOW3\Persistence\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

	/**
	 * Autogenerated Proxy Class
	 */
class Query extends Query_Original implements \TYPO3\FLOW3\Object\Proxy\ProxyInterface {

	private $FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array();

	private $FLOW3_AOP_Proxy_groupedAdviceChains = array();

	private $FLOW3_AOP_Proxy_methodIsInAdviceMode = array();


	/**
	 * Autogenerated Proxy Method
	 * @param string $entityClassName
	 */
	public function __construct() {
		$arguments = func_get_args();

		$this->FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();
		if (!isset($arguments[0])) throw new \TYPO3\FLOW3\Object\Exception\UnresolvedDependenciesException('Missing required constructor argument $entityClassName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
		call_user_func_array('parent::__construct', $arguments);
		$this->FLOW3_Proxy_injectProperties();
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 protected function FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray() {
		if (method_exists(get_parent_class($this), 'FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray')) parent::FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();

		$objectManager = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager;
		$this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices = array(
			'execute' => array(
				'TYPO3\FLOW3\AOP\Advice\BeforeAdvice' => array(
					new \TYPO3\FLOW3\AOP\Advice\BeforeAdvice('TYPO3\FLOW3\Security\Aspect\PersistenceQueryRewritingAspect', 'rewriteQomQuery', $objectManager, NULL),
				),
			),
			'count' => array(
				'TYPO3\FLOW3\AOP\Advice\BeforeAdvice' => array(
					new \TYPO3\FLOW3\AOP\Advice\BeforeAdvice('TYPO3\FLOW3\Security\Aspect\PersistenceQueryRewritingAspect', 'rewriteQomQuery', $objectManager, NULL),
				),
			),
		);
	}

	/**
	 * Autogenerated Proxy Method
	 * @return void
	 */
	 public function __wakeup() {

		$this->FLOW3_AOP_Proxy_buildMethodsAndAdvicesArray();

	if (property_exists($this, 'FLOW3_Persistence_RelatedEntities') && is_array($this->FLOW3_Persistence_RelatedEntities)) {
		$persistenceManager = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Persistence\PersistenceManagerInterface');
		foreach ($this->FLOW3_Persistence_RelatedEntities as $entityInformation) {
			$entity = $persistenceManager->getObjectByIdentifier($entityInformation['identifier'], $entityInformation['entityType'], TRUE);
			if (isset($entityInformation['entityPath'])) {
				$this->$entityInformation['propertyName'] = \TYPO3\FLOW3\Utility\Arrays::setValueByPath($this->$entityInformation['propertyName'], $entityInformation['entityPath'], $entity);
			} else {
				$this->$entityInformation['propertyName'] = $entity;
			}
		}
		unset($this->FLOW3_Persistence_RelatedEntities);
	}
				$this->FLOW3_Proxy_injectProperties();
		return parent::__wakeup();
;
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
	 * @return \TYPO3\FLOW3\Persistence\QueryResultInterface The query result
	 */
	 public function execute() {

		if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['execute'])) {
		$result = parent::execute();

		} else {
			$this->FLOW3_AOP_Proxy_methodIsInAdviceMode['execute'] = TRUE;
			try {
			
					$methodArguments = array();

					$advices = $this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices['execute']['TYPO3\FLOW3\AOP\Advice\BeforeAdvice'];
					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\FLOW3\Persistence\Doctrine\Query', 'execute', $methodArguments);
					foreach ($advices as $advice) {
						$advice->invoke($joinPoint);
					}

					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\FLOW3\Persistence\Doctrine\Query', 'execute', $methodArguments);
					$result = $this->FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);

			} catch(\Exception $e) {
				unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['execute']);
				throw $e;
			}
			unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['execute']);
		}
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 * @return integer The query result count
	 */
	 public function count() {

		if (isset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['count'])) {
		$result = parent::count();

		} else {
			$this->FLOW3_AOP_Proxy_methodIsInAdviceMode['count'] = TRUE;
			try {
			
					$methodArguments = array();

					$advices = $this->FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices['count']['TYPO3\FLOW3\AOP\Advice\BeforeAdvice'];
					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\FLOW3\Persistence\Doctrine\Query', 'count', $methodArguments);
					foreach ($advices as $advice) {
						$advice->invoke($joinPoint);
					}

					$joinPoint = new \TYPO3\FLOW3\AOP\JoinPoint($this, 'TYPO3\FLOW3\Persistence\Doctrine\Query', 'count', $methodArguments);
					$result = $this->FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);

			} catch(\Exception $e) {
				unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['count']);
				throw $e;
			}
			unset($this->FLOW3_AOP_Proxy_methodIsInAdviceMode['count']);
		}
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function searchForEntitiesAndStoreIdentifierArray($path, $propertyValue, $originalPropertyName) {

		if (is_array($propertyValue) || (is_object($propertyValue) && ($propertyValue instanceof \ArrayObject || $propertyValue instanceof \SplObjectStorage))) {
			foreach($propertyValue as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray($path . '.' . $key, $value, $originalPropertyName);
			}
		} elseif ($propertyValue instanceof \TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Persistence\PersistenceManagerInterface')->isNewObject($propertyValue) || $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
			if (!property_exists($this, 'FLOW3_Persistence_RelatedEntities') || !is_array($this->FLOW3_Persistence_RelatedEntities)) {
				$this->FLOW3_Persistence_RelatedEntities = array();
				$this->FLOW3_Object_PropertiesToSerialize[] = 'FLOW3_Persistence_RelatedEntities';
			}
			if ($propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($propertyValue);
			} else {
				$className = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($propertyValue));
			}
			$identifier = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Persistence\PersistenceManagerInterface')->getIdentifierByObject($propertyValue);
			if (!$identifier && $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$identifier = current(\TYPO3\FLOW3\Reflection\ObjectAccess::getProperty($propertyValue, '_identifier', TRUE));
			}
			$this->FLOW3_Persistence_RelatedEntities[$originalPropertyName . '.' . $path] = array(
				'propertyName' => $originalPropertyName,
				'entityType' => $className,
				'identifier' => $identifier,
				'entityPath' => $path
			);
			$this->$originalPropertyName = \TYPO3\FLOW3\Utility\Arrays::setValueByPath($this->$originalPropertyName, $path, NULL);
		}
			}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function FLOW3_Proxy_injectProperties() {
		$this->injectEntityManager(\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('Doctrine\Common\Persistence\ObjectManager'));
	}
}
#0             %CLASS%TYPO3_FLOW3_Persistence_Doctrine_Query8864      