<?php

namespace Pnpc\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PnpcUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
