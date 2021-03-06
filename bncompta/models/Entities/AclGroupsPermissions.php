<?php

namespace Entities;

/**
 * Entities\AclGroupsPermissions
 */
class AclGroupsPermissions
{
    /**
     * @var string $accessType
     */
    private $accessType;

    /**
     * @var integer $createdOn
     */
    private $createdOn;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\AclResources
     */
    private $acl_resource;

    /**
     * @var Entities\Groups
     */
    private $group;


    /**
     * Set accessType
     *
     * @param string $accessType
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    }

    /**
     * Get accessType
     *
     * @return string $accessType
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Set createdOn
     *
     * @param integer $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Get createdOn
     *
     * @return integer $createdOn
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set acl_resource
     *
     * @param Entities\AclResources $aclResource
     */
    public function setAclResource(\Entities\AclResources $aclResource)
    {
        $this->acl_resource = $aclResource;
    }

    /**
     * Get acl_resource
     *
     * @return Entities\AclResources $aclResource
     */
    public function getAclResource()
    {
        return $this->acl_resource;
    }

    /**
     * Set group
     *
     * @param Entities\Groups $group
     */
    public function setGroup(\Entities\Groups $group)
    {
        $this->group = $group;
    }

    /**
     * Get group
     *
     * @return Entities\Groups $group
     */
    public function getGroup()
    {
        return $this->group;
    }
}