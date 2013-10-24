<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity
 */
class Entity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $desc;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $is_active;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $websites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $website_entities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->websites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->website_entities = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Entity
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Entity
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set is_active
     *
     * @param string $isActive
     * @return Entity
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    
        return $this;
    }

    /**
     * Get is_active
     *
     * @return string 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Entity
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Entity
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add websites
     *
     * @param \Stc\ScraperBundle\Entity\Website $websites
     * @return Entity
     */
    public function addWebsite(\Stc\ScraperBundle\Entity\Website $websites)
    {
        $this->websites[] = $websites;
    
        return $this;
    }

    /**
     * Remove websites
     *
     * @param \Stc\ScraperBundle\Entity\Website $websites
     */
    public function removeWebsite(\Stc\ScraperBundle\Entity\Website $websites)
    {
        $this->websites->removeElement($websites);
    }

    /**
     * Get websites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * Add website_entities
     *
     * @param \Stc\ScraperBundle\Entity\WebsiteEntity $websiteEntities
     * @return Entity
     */
    public function addWebsiteEntitie(\Stc\ScraperBundle\Entity\WebsiteEntity $websiteEntities)
    {
        $this->website_entities[] = $websiteEntities;
    
        return $this;
    }

    /**
     * Remove website_entities
     *
     * @param \Stc\ScraperBundle\Entity\WebsiteEntity $websiteEntities
     */
    public function removeWebsiteEntitie(\Stc\ScraperBundle\Entity\WebsiteEntity $websiteEntities)
    {
        $this->website_entities->removeElement($websiteEntities);
    }

    /**
     * Get website_entities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWebsiteEntities()
    {
        return $this->website_entities;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}
