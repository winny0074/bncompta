<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EntitiesEnterprisesBankAccountsProxy extends \Entities\EnterprisesBankAccounts implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function setLabel($label)
    {
        $this->_load();
        return parent::setLabel($label);
    }

    public function getLabel()
    {
        $this->_load();
        return parent::getLabel();
    }

    public function setName($name)
    {
        $this->_load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->_load();
        return parent::getName();
    }

    public function setAddress($address)
    {
        $this->_load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->_load();
        return parent::getAddress();
    }

    public function setRib($rib)
    {
        $this->_load();
        return parent::setRib($rib);
    }

    public function getRib()
    {
        $this->_load();
        return parent::getRib();
    }

    public function setIban($iban)
    {
        $this->_load();
        return parent::setIban($iban);
    }

    public function getIban()
    {
        $this->_load();
        return parent::getIban();
    }

    public function setBic($bic)
    {
        $this->_load();
        return parent::setBic($bic);
    }

    public function getBic()
    {
        $this->_load();
        return parent::getBic();
    }

    public function setContact($contact)
    {
        $this->_load();
        return parent::setContact($contact);
    }

    public function getContact()
    {
        $this->_load();
        return parent::getContact();
    }

    public function setDescription($description)
    {
        $this->_load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->_load();
        return parent::getDescription();
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function addEnterprisesBankStatements(\Entities\EnterprisesBankStatements $enterprisesBankStatements)
    {
        $this->_load();
        return parent::addEnterprisesBankStatements($enterprisesBankStatements);
    }

    public function getEnterprisesBankStatements()
    {
        $this->_load();
        return parent::getEnterprisesBankStatements();
    }

    public function setEnterprise(\Entities\Enterprises $enterprise)
    {
        $this->_load();
        return parent::setEnterprise($enterprise);
    }

    public function getEnterprise()
    {
        $this->_load();
        return parent::getEnterprise();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'label', 'name', 'address', 'rib', 'iban', 'bic', 'contact', 'description', 'id', 'enterprises_bank_statements', 'enterprise');
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
        
    }
}