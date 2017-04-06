<?php

namespace SB\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SB\PostBundle\Entity\Post;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $groups = $user->getGroups();

        $postlist = $this->getDoctrine()->getManager()->getRepository('SBPostBundle:Post')->getMixFromGroups($groups);

        return $this->render('SBPostBundle:Default:index.html.twig',array('groups'=>$groups,'postlist'=>$postlist));
    }
}
