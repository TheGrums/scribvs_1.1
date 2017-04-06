<?php

namespace SB\GroupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SBGroupBundle:Default:index.html.twig');
    }
}
