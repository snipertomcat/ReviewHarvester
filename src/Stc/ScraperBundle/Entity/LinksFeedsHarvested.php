<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinksFeedsHarvested
 */
class LinksFeedsHarvested
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var \DateTime
     */
    private $discovered_at;

    /**
     * @var \DateTime
     */
    private $scraped_at;

    /**
     * @var integer
     */
    private $status;


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
     * Set url
     *
     * @param string $url
     * @return LinksFeedsHarvested
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set discovered_at
     *
     * @param \DateTime $discoveredAt
     * @return LinksFeedsHarvested
     */
    public function setDiscoveredAt($discoveredAt)
    {
        $this->discovered_at = $discoveredAt;
    
        return $this;
    }

    /**
     * Get discovered_at
     *
     * @return \DateTime 
     */
    public function getDiscoveredAt()
    {
        return $this->discovered_at;
    }

    /**
     * Set scraped_at
     *
     * @param \DateTime $scrapedAt
     * @return LinksFeedsHarvested
     */
    public function setScrapedAt($scrapedAt)
    {
        $this->scraped_at = $scrapedAt;
    
        return $this;
    }

    /**
     * Get scraped_at
     *
     * @return \DateTime 
     */
    public function getScrapedAt()
    {
        return $this->scraped_at;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return LinksFeedsHarvested
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @ORM\PrePersist
     */
    public function setDescoveredAt()
    {
        // Add your code here
    }
}
