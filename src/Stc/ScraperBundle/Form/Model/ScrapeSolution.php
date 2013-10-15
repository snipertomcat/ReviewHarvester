<?php

namespace Stc\ScraperBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Stc\ScraperBundle\Form\Type\WebsiteType;

class ScrapeSolution
{
    /**
     * @Assert\Type(type="Stc\ScraperBundle\Entity\Website")
     * @Assert\Valid()
     */
    protected $website;

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($site)
    {
        $this->website = $site;
    }
}