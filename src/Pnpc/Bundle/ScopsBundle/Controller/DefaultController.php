<?php

namespace Pnpc\Bundle\ScopsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PnpcScopsBundle:Scops:index.html.twig');
    }
}
