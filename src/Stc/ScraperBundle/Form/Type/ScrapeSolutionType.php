<?php

namespace Stc\ScraperBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ScrapeSolutionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('website', new WebsiteType());

    }

    public function getName()
    {
        return 'scraper_solution';
    }
}