<?php

namespace Bkfk\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BkfkLandingBundle:Default:index.html.twig');
    }
}
