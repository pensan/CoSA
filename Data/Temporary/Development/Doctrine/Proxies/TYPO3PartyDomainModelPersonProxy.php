<?php

namespace TYPO3\FLOW3\Persistence\Doctrine\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TYPO3PartyDomainModelPersonProxy extends \TYPO3\Party\Domain\Model\Person implements \Doctrine\ORM\Proxy\Proxy
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
	 * Sets the current name of this person
	 *
	 * @param \TYPO3\Party\Domain\Model\PersonName $name Name of this person
	 * @return void
	 */
    public function setName(\TYPO3\Party\Domain\Model\PersonName $name)
    {
        $this->__load();
        return parent::setName($name);
    }

/**
	 * Returns the current name of this person
	 *
	 * @return \TYPO3\Party\Domain\Model\PersonName Name of this person
	 */
    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

/**
	 * Adds the given electronic address to this person.
	 *
	 * @param \TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress The electronic address
	 * @return void
	 */
    public function addElectronicAddress(\TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress)
    {
        $this->__load();
        return parent::addElectronicAddress($electronicAddress);
    }

/**
	 * Removes the given electronic address from this person.
	 *
	 * @param \TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress The electronic address
	 * @return void
	 */
    public function removeElectronicAddress(\TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress)
    {
        $this->__load();
        return parent::removeElectronicAddress($electronicAddress);
    }

/**
	 * Returns all known electronic addresses of this person.
	 *
	 * @return \Doctrine\Common\Collections\Collection<\TYPO3\Party\Domain\Model\ElectronicAddress>
	 */
    public function getElectronicAddresses()
    {
        $this->__load();
        return parent::getElectronicAddresses();
    }

/**
	 * Sets (and adds if necessary) the primary electronic address of this person.
	 *
	 * @param \TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress The electronic address
	 * @return void
	 */
    public function setPrimaryElectronicAddress(\TYPO3\Party\Domain\Model\ElectronicAddress $electronicAddress)
    {
        $this->__load();
        return parent::setPrimaryElectronicAddress($electronicAddress);
    }

/**
	 * Returns the primary electronic address, if one has been defined.
	 *
	 * @return \TYPO3\Party\Domain\Model\ElectronicAddress The primary electronic address or NULL
	 */
    public function getPrimaryElectronicAddress()
    {
        $this->__load();
        return parent::getPrimaryElectronicAddress();
    }

/**
	 * Assigns the given account to this party. Note: The internal reference of the account is
	 * set to this party.
	 *
	 * @param \TYPO3\FLOW3\Security\Account $account The account
	 * @return void
	 */
    public function addAccount(\TYPO3\FLOW3\Security\Account $account)
    {
        $this->__load();
        return parent::addAccount($account);
    }

/**
	 * Remove an account from this party
	 *
	 * @param \TYPO3\FLOW3\Security\Account $account The account to remove
	 * @return void
	 */
    public function removeAccount(\TYPO3\FLOW3\Security\Account $account)
    {
        $this->__load();
        return parent::removeAccount($account);
    }

/**
	 * Returns the accounts of this party
	 *
	 * @return \Doctrine\Common\Collections\Collection All assigned TYPO3\FLOW3\Security\Account objects
	 */
    public function getAccounts()
    {
        $this->__load();
        return parent::getAccounts();
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