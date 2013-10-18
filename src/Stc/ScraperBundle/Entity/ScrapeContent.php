<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScrapeContent
 */
class ScrapeContent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $headers;

    /**
     * @var string
     */
    private $data;


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
     * Set headers
     *
     * @param string $headers
     * @return ScrapeContent
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    
        return $this;
    }

    /**
     * Get headers
     *
     * @return string 
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return ScrapeContent
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }
}