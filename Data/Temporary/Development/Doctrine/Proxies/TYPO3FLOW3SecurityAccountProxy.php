<?php

namespace TYPO3\FLOW3\Persistence\Doctrine\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TYPO3FLOW3SecurityAccountProxy extends \TYPO3\FLOW3\Security\Account implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
            if (is_callable(array($this, '__wakeup'))) {
                $this->__wakeup();
            }
        }
    }
    
    
/**
	 * Autogenerated Proxy Method
	 */
    public function __wakeup()
    {
        $this->__load();
        return parent::__wakeup();
    }

/**
	 * Autogenerated Proxy Method
	 */
    public function FLOW3_AOP_Proxy_invokeJoinPoint(\TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint)
    {
        $this->__load();
        return parent::FLOW3_AOP_Proxy_invokeJoinPoint($joinPoint);
    }

/**
	 * Returns the account identifier
	 *
	 * @return string The account identifier
	 */
    public function getAccountIdentifier()
    {
        $this->__load();
        return parent::getAccountIdentifier();
    }

/**
	 * Set the account identifier
	 *
	 * @param string $accountIdentifier The account identifier
	 * @return void
	 */
    public function setAccountIdentifier($accountIdentifier)
    {
        $this->__load();
        return parent::setAccountIdentifier($accountIdentifier);
    }

/**
	 * Returns the authenitcation provider name this account corresponds to
	 *
	 * @return string The authentication provider name
	 */
    public function getAuthenticationProviderName()
    {
        $this->__load();
        return parent::getAuthenticationProviderName();
    }

/**
	 * Set the authentication provider name this account corresponds to
	 *
	 * @param string $authenticationProviderName The authentication provider name
	 * @return void
	 */
    public function setAuthenticationProviderName($authenticationProviderName)
    {
        $this->__load();
        return parent::setAuthenticationProviderName($authenticationProviderName);
    }

/**
	 * Returns the credentials source
	 *
	 * @return mixed The credentials source
	 */
    public function getCredentialsSource()
    {
        $this->__load();
        return parent::getCredentialsSource();
    }

/**
	 * Sets the credentials source
	 *
	 * @param mixed $credentialsSource The credentials source
	 * @return void
	 */
    public function setCredentialsSource($credentialsSource)
    {
        $this->__load();
        return parent::setCredentialsSource($credentialsSource);
    }

/**
	 * Returns the party object this account corresponds to
	 *
	 * @return \TYPO3\Party\Domain\Model\AbstractParty The party object
	 */
    public function getParty()
    {
        $this->__load();
        return parent::getParty();
    }

/**
	 * Sets the corresponding party for this account
	 *
	 * @param \TYPO3\Party\Domain\Model\AbstractParty $party The party object
	 * @return void
	 */
    public function setParty(\TYPO3\Party\Domain\Model\AbstractParty $party)
    {
        $this->__load();
        return parent::setParty($party);
    }

/**
	 * Returns the roles this account has assigned
	 *
	 * @return array The assigned roles
	 */
    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

/**
	 * Sets the roles for this account
	 *
	 * @param array $roles An array of TYPO3\FLOW3\Security\Policy\Role objects
	 * @return void
	 */
    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

/**
	 * Adds a role to this account
	 *
	 * @param \TYPO3\FLOW3\Security\Policy\Role $role
	 * @return void
	 */
    public function addRole(\TYPO3\FLOW3\Security\Policy\Role $role)
    {
        $this->__load();
        return parent::addRole($role);
    }

/**
	 * Removes a role from this account
	 *
	 * @param \TYPO3\FLOW3\Security\Policy\Role $role
	 * @return void
	 */
    public function removeRole(\TYPO3\FLOW3\Security\Policy\Role $role)
    {
        $this->__load();
        return parent::removeRole($role);
    }

/**
	 * @return \DateTime
	 */
    public function getCreationDate()
    {
        $this->__load();
        return parent::getCreationDate();
    }

/**
	 * @return \DateTime
	 */
    public function getExpirationDate()
    {
        $this->__load();
        return parent::getExpirationDate();
    }

/**
	 * @param \DateTime $expirationDate
	 * @return void
	 */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->__load();
        return parent::setExpirationDate($expirationDate);
    }


    public function __sleep()
    {
        return array_merge(array('__isInitialized__'), parent::__sleep());
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        parent::__clone();
    }
}