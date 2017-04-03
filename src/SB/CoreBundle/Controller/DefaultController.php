<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace SB\CoreBundle\Controller;


// N'oubliez pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller

{

  public function redirectAction(Request $req)

  {

    return $this->redirectToRoute('sb_posts_default');

  }

}
