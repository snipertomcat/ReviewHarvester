<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteEntity
 */
class WebsiteEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Stc\ScraperBundle\Entity\Entity
     */
    private $entity;

    /**
     * @var \Stc\ScraperBundle\Entity\Website
     */
    private $website;


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
     * Set entity
     *
     * @param \Stc\ScraperBundle\Entity\Entity $entity
     * @return WebsiteEntity
     */
    public function setEntity(\Stc\ScraperBundle\Entity\Entity $entity = null)
    {
        $this->entity = $entity;
    
        return $this;
    }

    /**
     * Get entity
     *
     * @return \Stc\ScraperBundle\Entity\Entity 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set website
     *
     * @param \Stc\ScraperBundle\Entity\Website $website
     * @return WebsiteEntity
     */
    public function setWebsite(\Stc\ScraperBundle\Entity\Website $website = null)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return \Stc\ScraperBundle\Entity\Website 
     */
    public function getWebsite()
    {
        return $this->website;
    }
}