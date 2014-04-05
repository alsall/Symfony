<?php

namespace Scops\BagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ScopsBagueBundle:Default:index.html.twig');
    }

}
