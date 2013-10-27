<?php

namespace Stc\ScraperBundle\Controller;

use Stc\ScraperBundle\Form\WebsiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Response;
use Stc\ScraperBundle\Form\Type\ScrapeSolutionType;
use Stc\ScraperBundle\Form\Model\ScrapeSolution;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $page_data = array();

        $form = $this->createForm(
            new ScrapeSolutionType(),
            new ScrapeSolution()
        );

        $page_data['form'] = $form->createView();

        return $this->render('StcScraperBundle:Default:index.html.twig', $page_data);
    }

    public function createAction()
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ScrapeSolutionType(), new ScrapeSolution());

        $form->bind($this->getRequest());

        if ($form->isValid()) {
            $solution = $form->getData();

            $em->persist($solution->getWebsite());
            $em->persist($solution->getEntity());

            $em->flush();

            return $this->redirect('/home');
        }

        return $this->render(
            'StcScraperBundle:Default:index.html.twig',
            array('form' => $form->createView())
        );
    }
}
