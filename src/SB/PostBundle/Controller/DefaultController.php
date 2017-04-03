<?php

namespace SB\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SBPostBundle:Default:index.html.twig');
    }
}
