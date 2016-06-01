<?php

namespace nacholibre\HelperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('nacholibreHelperBundle:Default:index.html.twig');
    }
}
