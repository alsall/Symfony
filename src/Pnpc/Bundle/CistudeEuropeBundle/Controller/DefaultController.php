<?php

namespace Pnpc\Bundle\CistudeEuropeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PnpcCistudeEuropeBundle:Default:index.html.twig', array('name' => $name));
    }
}
