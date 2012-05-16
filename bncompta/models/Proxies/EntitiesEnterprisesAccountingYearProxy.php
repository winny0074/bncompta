<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EntitiesEnterprisesAccountingYearProxy extends \Entities\EnterprisesAccountingYear implements \Doctrine\ORM\Proxy\Proxy
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

    public function setStartDate($startDate)
    {
        $this->_load();
        return parent::setStartDate($startDate);
    }

    public function getStartDate()
    {
        $this->_load();
        return parent::getStartDate();
    }

    public function setEndDate($endDate)
    {
        $this->_load();
        return parent::setEndDate($endDate);
    }

    public function getEndDate()
    {
        $this->_load();
        return parent::getEndDate();
    }

    public function setClosed($closed)
    {
        $this->_load();
        return parent::setClosed($closed);
    }

    public function getClosed()
    {
        $this->_load();
        return parent::getClosed();
    }

    public function setIsDefault($isDefault)
    {
        $this->_load();
        return parent::setIsDefault($isDefault);
    }

    public function getIsDefault()
    {
        $this->_load();
        return parent::getIsDefault();
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
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

    public function addEnterprisesIncome(\Entities\EntreprisesIncomes $enterprisesIncome)
    {
        $this->_load();
        return parent::addEnterprisesIncome($enterprisesIncome);
    }

    public function getEnterprisesIncome()
    {
        $this->_load();
        return parent::getEnterprisesIncome();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'label', 'description', 'startDate', 'endDate', 'closed', 'isDefault', 'id', 'enterprises_income', 'enterprise');
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