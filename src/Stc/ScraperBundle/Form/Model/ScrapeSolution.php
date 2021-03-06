<?php

namespace Stc\ScraperBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Stc\ScraperBundle\Form\Type\WebsiteType;

class ScrapeSolution
{
    /**
     * @Assert\Type(type="Stc\ScraperBundle\Entity\Website")
     * @Assert\Valid()
     * @desc A valid domain to scrape
     */
    protected $website;

    /**
     * @Assert\Type(type="Stc\ScraperBundle\Entity\Entity")
     * @Assert\Valid()
     * @desc A valid search entity
     */
    protected $entity;

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($site)
    {
        $this->website = $site;
    }

    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function getEntity()
    {
        return $this->entity;
    }
}