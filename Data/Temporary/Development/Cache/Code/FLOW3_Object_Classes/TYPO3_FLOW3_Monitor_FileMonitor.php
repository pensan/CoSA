<?php
namespace TYPO3\FLOW3\Monitor;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

	/**
	 * Autogenerated Proxy Class
	 */
class FileMonitor extends FileMonitor_Original implements \TYPO3\FLOW3\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 * @param string $identifier Name of this specific file monitor - will be used in the signals emitted by this monitor.
	 */
	public function __construct() {
		$arguments = func_get_args();
		if (!isset($arguments[0])) throw new \TYPO3\FLOW3\Object\Exception\UnresolvedDependenciesException('Missing required constructor argument $identifier in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
		call_user_func_array('parent::__construct', $arguments);
		$this->FLOW3_Proxy_injectProperties();

		$this->initializeObject(1);

		\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

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
		$result = NULL;

		$this->initializeObject(2);

		\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __sleep() {
		$result = NULL;
		$this->FLOW3_Object_PropertiesToSerialize = array();
	$reflectionService = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Reflection\ReflectionService');
	$reflectedClass = new \ReflectionClass('TYPO3\FLOW3\Monitor\FileMonitor');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('FLOW3_AOP_Proxy_targetMethodsAndGroupedAdvices', 'FLOW3_AOP_Proxy_groupedAdviceChains', 'FLOW3_AOP_Proxy_methodIsInAdviceMode'))) continue;
		if ($reflectionService->isPropertyTaggedWith('TYPO3\FLOW3\Monitor\FileMonitor', $propertyName, 'transient')) continue;
		if (is_array($this->$propertyName) || (is_object($this->$propertyName) && ($this->$propertyName instanceof \ArrayObject || $this->$propertyName instanceof \SplObjectStorage ||$this->$propertyName instanceof \Doctrine\Common\Collections\Collection))) {
			foreach($this->$propertyName as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray((string)$key, $value, $propertyName);
			}
		}
		if (is_object($this->$propertyName) && !$this->$propertyName instanceof \Doctrine\Common\Collections\Collection) {
			if ($this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($this->$propertyName);
			} else {
				$className = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($this->$propertyName));
			}
			if ($this->$propertyName instanceof \TYPO3\FLOW3\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Persistence\PersistenceManagerInterface')->isNewObject($this->$propertyName) || $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				if (!property_exists($this, 'FLOW3_Persistence_RelatedEntities') || !is_array($this->FLOW3_Persistence_RelatedEntities)) {
					$this->FLOW3_Persistence_RelatedEntities = array();
					$this->FLOW3_Object_PropertiesToSerialize[] = 'FLOW3_Persistence_RelatedEntities';
				}
				$identifier = \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Persistence\PersistenceManagerInterface')->getIdentifierByObject($this->$propertyName);
				if (!$identifier && $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
					$identifier = current(\TYPO3\FLOW3\Reflection\ObjectAccess::getProperty($this->$propertyName, '_identifier', TRUE));
				}
				$this->FLOW3_Persistence_RelatedEntities[$propertyName] = array(
					'propertyName' => $propertyName,
					'entityType' => $className,
					'identifier' => $identifier
				);
				continue;
			}
			if ($className !== FALSE && \TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->getScope($className) === \TYPO3\FLOW3\Object\Configuration\Configuration::SCOPE_SINGLETON) {
				continue;
			}
		}
		$this->FLOW3_Object_PropertiesToSerialize[] = $propertyName;
	}
	$result = $this->FLOW3_Object_PropertiesToSerialize;
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
		$this->injectCache(\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Cache\CacheManager')->getCache('FLOW3_Monitor'));
		$this->injectChangeDetectionStrategy(\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Monitor\ChangeDetectionStrategy\ChangeDetectionStrategyInterface'));
		$this->injectSignalDispatcher(\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\SignalSlot\Dispatcher'));
		$this->injectSystemLogger(\TYPO3\FLOW3\Core\Bootstrap::$staticObjectManager->get('TYPO3\FLOW3\Log\SystemLoggerInterface'));
	}
}
#0             %CLASS%TYPO3_FLOW3_Monitor_FileMonitor8014      