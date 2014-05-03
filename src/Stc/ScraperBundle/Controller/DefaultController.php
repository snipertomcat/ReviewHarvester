<?php

namespace Stc\ScraperBundle\Controller;

use React\Stream\ReadableStream;
use Stc\ScraperBundle\Entity\BaseSite;
use Stc\ScraperBundle\Form\Handler\CreateBaseFormHandler;
use Stc\ScraperBundle\Form\Type\BaseSiteType;
use Stc\ScraperBundle\Form\WebsiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use React;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $page_data = array();

        /*$form = $this->createForm(
            new BaseSiteType(),
            new ScrapeSolution()
        );*/

        $form = $this->createForm(new BaseSiteType());
        //print_r($form->getExtraData());

/*        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $data->setId(md5($request->getSession()->getId()));
            echo "<pre>";print_r($data);
            $request->initialize('data');
            return $this->redirect($this->generateUrl('stc_scraper_form_basesite_submit',array($form)));
        }*/

        $loop = React\EventLoop\Factory::create();

        $dnsResolverFactory = new React\Dns\Resolver\Factory();
        $dnsResolver = $dnsResolverFactory->createCached('8.8.8.8', $loop);

        $factory = new React\HttpClient\Factory();
        $client = $factory->create($loop, $dnsResolver);

        $request = $client->request('GET', '');
        $request->on('response', function ($response) {
            $buffer = '';

            $response->on('data', function ($data) use (&$buffer) {
                $buffer .= $data;
                echo ".";
            });

            $response->on('end', function () use (&$buffer) {
                $decoded = json_decode($buffer, true);
                $latest = $decoded[0]['commit'];
                $author = $latest['author']['name'];
                $date = date('F j, Y', strtotime($latest['author']['date']));

                echo "\n";
                echo "Latest commit on react was done by {$author} on {$date}\n";
                echo "{$latest['message']}\n";
            });
        });
        $request->on('end', function ($error, $response) {
            echo $error;
        });
        $request->end();

        $loop->run();
        //$request->end();

        $page_data['form'] = $form->createView();

        return $this->render('StcScraperBundle:Default:index.html.twig', $page_data);
    }

    public function postAction()
    {
/*        $page_data  = array();

        if ($this->getRequest()->isMethod('POST')) {
            echo "<pre>";
            print_r($_POST);
        }

        return new Response();*/
    }

    public function startAction(Request $request)
    {
        $page_data = array();

        print_r($request->get('data'));exit;

        return new Response();
    }
}
